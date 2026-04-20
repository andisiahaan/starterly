<?php

namespace App\Livewire\Admin\Settings;

use App\Helpers\Toast;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class CustomTags extends Component
{
    public array $state = [];

    public function mount()
    {
        $this->loadSettings();
    }

    public function loadSettings()
    {
        $setting = Setting::firstOrCreate(
            ['section' => 'custom_tags'],
            ['config' => $this->getDefaults()]
        );

        $this->state = array_merge($this->getDefaults(), $setting->config ?? []);
    }

    public function getDefaults(): array
    {
        return [
            'main_head_tags' => '',
            'main_body_tags' => '',
            'plain_head_tags' => '',
            'plain_body_tags' => '',
            'blog_head_tags' => '',
            'blog_body_tags' => '',
        ];
    }

    public function getLayoutDescriptions(): array
    {
        return [
            'main' => [
                'name' => 'Main Layout',
                'description' => 'Public pages like landing, about, contact',
            ],
            'plain' => [
                'name' => 'Plain Layout',
                'description' => 'Minimal layout for auth pages (login, register)',
            ],
            'blog' => [
                'name' => 'Blog Layout',
                'description' => 'Blog pages',
            ],
        ];
    }

    public function save()
    {
        Setting::updateOrCreate(
            ['section' => 'custom_tags'],
            ['config' => $this->state]
        );

        Cache::forget('settings.custom_tags');
        Toast::success('Custom tags saved successfully.');
    }

    public function render()
    {
        return view('livewire.admin.settings.custom-tags', [
            'layouts' => $this->getLayoutDescriptions(),
        ]);
    }
}
