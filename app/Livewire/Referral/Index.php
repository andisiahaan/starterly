<?php

namespace App\Livewire\Referral;

use App\Helpers\Toast;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public string $search = '';
    
    // Referral code editing
    public bool $editingCode = false;
    public string $newReferralCode = '';

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function copyReferralLink(): void
    {
        $this->dispatch('copy-to-clipboard', url: Auth::user()->referral_url);
    }

    /**
     * Start editing referral code.
     */
    public function startEditingCode(): void
    {
        $this->newReferralCode = Auth::user()->referral_code;
        $this->editingCode = true;
    }

    /**
     * Cancel editing referral code.
     */
    public function cancelEditingCode(): void
    {
        $this->editingCode = false;
        $this->newReferralCode = '';
        $this->resetValidation('newReferralCode');
    }

    /**
     * Update referral code.
     */
    public function updateReferralCode(): void
    {
        $this->validate([
            'newReferralCode' => [
                'required',
                'string',
                'min:4',
                'max:20',
                'alpha_dash',
                'unique:users,referral_code,' . Auth::id(),
            ],
        ], [
            'newReferralCode.required' => __('referral.user.code.validation.required'),
            'newReferralCode.min' => __('referral.user.code.validation.min'),
            'newReferralCode.max' => __('referral.user.code.validation.max'),
            'newReferralCode.alpha_dash' => __('referral.user.code.validation.alpha_dash'),
            'newReferralCode.unique' => __('referral.user.code.validation.unique'),
        ]);

        $user = Auth::user();
        $user->referral_code = strtoupper($this->newReferralCode);
        $user->save();

        $this->editingCode = false;
        $this->newReferralCode = '';
        
        Toast::success(__('referral.user.code.updated'));
    }

    public function render()
    {
        $user = Auth::user();

        // Statistics
        $stats = [
            'total_referrals' => $user->referrals()->count(),
        ];

        // Referred users
        $referrals = $user->referrals()
            ->when($this->search, fn($q) => $q->where('name', 'like', "%{$this->search}%")
                ->orWhere('email', 'like', "%{$this->search}%"))
            ->orderByDesc('created_at')
            ->paginate(10);

        return view('livewire.referral.index', [
            'stats' => $stats,
            'referrals' => $referrals,
            'referralUrl' => $user->referral_url,
            'referralCode' => $user->referral_code,
        ])->layout('layouts.app', ['title' => 'Referral Program']);
    }
}
