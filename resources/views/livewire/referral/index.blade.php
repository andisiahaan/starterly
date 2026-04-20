<div>
    <!-- Referral Code -->
    <div class="bg-white dark:bg-dark-elevated rounded-xl shadow-sm border border-slate-200 dark:border-dark-border p-5 mb-4">
        <div class="flex items-center justify-between mb-2">
            <h3 class="text-lg font-semibold text-slate-900 dark:text-white">{{ __('referral.user.code.label') }}</h3>
            @if(!$editingCode)
            <button wire:click="startEditingCode" class="text-sm text-primary-600 hover:text-primary-700 font-medium">
                {{ __('referral.user.code.edit') }}
            </button>
            @endif
        </div>
        
        @if($editingCode)
        <div class="flex gap-2">
            <input type="text" wire:model="newReferralCode" 
                   class="flex-1 bg-slate-50 dark:bg-dark-soft border border-slate-200 dark:border-dark-border rounded-lg px-4 py-2.5 text-slate-700 dark:text-slate-300 text-sm uppercase"
                   placeholder="YOUR_CODE"
                   wire:keydown.enter="updateReferralCode">
            <button wire:click="updateReferralCode" class="px-4 py-2 bg-primary-600 text-white text-sm font-medium rounded-lg hover:bg-primary-700 transition">
                {{ __('referral.user.code.save') }}
            </button>
            <button wire:click="cancelEditingCode" class="px-4 py-2 bg-slate-100 dark:bg-dark-soft text-slate-700 dark:text-slate-300 text-sm font-medium rounded-lg hover:bg-slate-200 dark:hover:bg-dark-border transition">
                {{ __('referral.user.code.cancel') }}
            </button>
        </div>
        @error('newReferralCode') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
        @else
        <div class="flex items-center gap-3">
            <span class="px-4 py-2.5 bg-primary-100 dark:bg-primary-900/30 text-primary-700 dark:text-primary-400 font-mono font-bold rounded-lg text-lg">
                {{ $referralCode }}
            </span>
        </div>
        @endif
    </div>

    <!-- Referral Link -->
    <div class="bg-white dark:bg-dark-elevated rounded-xl shadow-sm border border-slate-200 dark:border-dark-border p-5 mb-8">
        <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">Your Referral Link</h3>
        <div class="flex gap-2">
            <input type="text" readonly value="{{ $referralUrl }}" 
                   class="flex-1 bg-slate-50 dark:bg-dark-soft border border-slate-200 dark:border-dark-border rounded-lg px-4 py-2.5 text-slate-700 dark:text-slate-300 text-sm"
                   id="referral-link">
            <button 
                wire:click="copyReferralLink"
                onclick="navigator.clipboard.writeText('{{ $referralUrl }}'); this.innerHTML = '<svg class=\'w-5 h-5\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M5 13l4 4L19 7\'/></svg>'; setTimeout(() => this.innerHTML = '<svg class=\'w-5 h-5\' fill=\'none\' stroke=\'currentColor\' viewBox=\'0 0 24 24\'><path stroke-linecap=\'round\' stroke-linejoin=\'round\' stroke-width=\'2\' d=\'M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z\'/></svg>', 2000)"
                class="inline-flex items-center px-4 py-2.5 bg-primary-600 text-white text-sm font-medium rounded-lg hover:bg-primary-700 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                </svg>
            </button>
        </div>
            Share this link with friends. When they register, they will be tracked as your referral.
        </p>
    </div>

    <!-- Your Referrals -->
    <div class="bg-white dark:bg-dark-elevated rounded-xl shadow-sm border border-slate-200 dark:border-dark-border overflow-hidden mb-8">
        <div class="px-5 py-4 border-b border-slate-200 dark:border-dark-border flex items-center justify-between">
            <h3 class="text-lg font-semibold text-slate-900 dark:text-white">Your Referrals</h3>
            <input type="text" 
                   wire:model.live.debounce.300ms="search" 
                   placeholder="Search..." 
                   class="w-48 bg-slate-50 dark:bg-dark-soft border border-slate-200 dark:border-dark-border rounded-lg px-3 py-2 text-sm text-slate-700 dark:text-slate-300 focus:ring-primary-500 focus:border-primary-500">
        </div>

        @if($referrals->count() > 0)
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200 dark:divide-dark-border">
                <thead class="bg-slate-50 dark:bg-dark-soft">
                    <tr>
                        <th class="px-5 py-3 text-left text-xs font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">User</th>
                        <th class="px-5 py-3 text-left text-xs font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">Joined</th>
                        <th class="px-5 py-3 text-left text-xs font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-dark-elevated divide-y divide-slate-200 dark:divide-dark-border">
                    @foreach($referrals as $referral)
                    <tr>
                        <td class="px-5 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center text-primary-600 dark:text-primary-400 font-semibold text-sm">
                                    {{ strtoupper(substr($referral->name, 0, 1)) }}
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-slate-900 dark:text-white">{{ $referral->name }}</p>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">{{ Str::mask($referral->email, '*', 3, 5) }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-4 whitespace-nowrap text-sm text-slate-500 dark:text-slate-400">
                            {{ $referral->created_at->format('M d, Y') }}
                        </td>
                        <td class="px-5 py-4 whitespace-nowrap">
                            @if($referral->email_verified_at)
                            <span class="inline-flex items-center rounded-full bg-green-100 dark:bg-green-900/30 px-2.5 py-0.5 text-xs font-medium text-green-700 dark:text-green-400">Verified</span>
                            @else
                            <span class="inline-flex items-center rounded-full bg-yellow-100 dark:bg-yellow-900/30 px-2.5 py-0.5 text-xs font-medium text-yellow-700 dark:text-yellow-400">Pending</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="px-5 py-4 border-t border-slate-200 dark:border-dark-border">
            {{ $referrals->links() }}
        </div>
        @else
        <div class="p-8 text-center">
            <svg class="mx-auto h-12 w-12 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <h3 class="mt-2 text-sm font-medium text-slate-900 dark:text-white">No referrals yet</h3>
            <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Share your referral link to track new registrations!</p>
        </div>
        @endif
    </div>

</div>
