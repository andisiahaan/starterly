<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Helpers\Toast;
use App\Helpers\Alert;
use App\Notifications\TestNotification;
use Carbon\Carbon;

class Home extends Component
{
    public function mount()
    {
        if (request()->has('test-redirect-alert')) {
            Alert::success('Hello, world!');
            return redirect()->route('home');
        }
    }

    public function showToast()
    {
        Toast::success('Hello, world! ');
    }
    
    public function testNotification()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $user->notify(new TestNotification());
        Toast::success('Notification sent!');
    }

    public function render()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        return view('livewire.home', [
            'user' => $user,
        ])->layout('layouts.main', [
            'title' => my_app('app_title'),
            'description' => my_app('description'),
            'keywords' => my_app('keywords'),
        ]);
    }
}