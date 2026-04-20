<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Log;

class ReferralService
{
    /**
     * Check if referral system is enabled.
     */
    public function isEnabled(): bool
    {
        return (bool) setting('referral.is_enabled', false);
    }

    /**
     * Get referral settings with caching.
     */
    public function getSettings(): array
    {
        return [
            'is_enabled' => (bool) setting('referral.is_enabled', false),
            'referral_cookie_days' => (int) setting('referral.referral_cookie_days', 60),
            'referral_expiry_days' => (int) setting('referral.referral_expiry_days', 30),
        ];
    }

    /**
     * Get user by referral code.
     */
    public function getUserByReferralCode(string $code): ?User
    {
        return User::where('referral_code', $code)->first();
    }
}
}
