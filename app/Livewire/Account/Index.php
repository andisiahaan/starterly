<?php

namespace App\Livewire\Account;

use Livewire\Component;

/**
 * Main Account page with tabbed navigation.
 * Route: /app/account
 */
class Index extends Component
{
    public string $activeTab = 'profile';

    public function mount(): void
    {
        // Check for tab query parameter
        $this->activeTab = request()->query('tab', 'profile');
    }

    public function setTab(string $tab): void
    {
        $this->activeTab = $tab;
    }

    public function render()
    {
        return view('livewire.account.index')
            ->layout('layouts.main')
            ->title(__('account.title'));
    }
}
