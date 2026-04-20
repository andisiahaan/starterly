<div>
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-semibold text-slate-900 dark:text-white">{{ __('admin.dashboard.title') }}</h1>
        <select wire:model.live="period" class="text-sm rounded-lg border-slate-300 dark:border-dark-border dark:bg-dark-elevated dark:text-white focus:ring-primary-500 focus:border-primary-500">
            <option value="7">{{ __('admin.dashboard.period.last_7_days') }}</option>
            <option value="30">{{ __('admin.dashboard.period.last_30_days') }}</option>
            <option value="90">{{ __('admin.dashboard.period.last_90_days') }}</option>
        </select>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
        <!-- Total Users -->
        <div class="bg-white dark:bg-dark-elevated overflow-hidden shadow-lg rounded-xl border border-slate-200 dark:border-dark-border">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-primary-100 dark:bg-primary-900/30 rounded-lg p-3">
                        <svg class="h-6 w-6 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div class="ml-4 flex-1">
                        <p class="text-sm font-medium text-slate-500 dark:text-slate-400">{{ __('admin.dashboard.stats.total_users') }}</p>
                        <p class="text-2xl font-bold text-slate-900 dark:text-white">{{ number_format($stats['total_users']) }}</p>
                        <p class="text-xs text-green-600 dark:text-green-400">{{ __('admin.dashboard.stats.new_users', ['count' => $stats['new_users']]) }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Charts Row -->
    <div class="mt-6 grid grid-cols-1 gap-6">

        <!-- User Registration Chart -->
        <div class="bg-white dark:bg-dark-elevated rounded-xl shadow-lg border border-slate-200 dark:border-dark-border overflow-hidden">
            <div class="px-5 py-4 border-b border-slate-200 dark:border-dark-border">
                <h3 class="text-base font-semibold text-slate-900 dark:text-white">{{ __('admin.dashboard.charts.new_users') }}</h3>
            </div>
            <div class="p-5">
                <canvas id="userChart" height="200"></canvas>
            </div>
        </div>
    </div>

    <!-- Order Status & Recent Activity -->
    <div class="mt-6 grid grid-cols-1 gap-6">

        <!-- Recent Users -->
        <div class="bg-white dark:bg-dark-elevated rounded-xl shadow-lg border border-slate-200 dark:border-dark-border overflow-hidden">
            <div class="px-5 py-4 border-b border-slate-200 dark:border-dark-border flex items-center justify-between">
                <h3 class="text-base font-semibold text-slate-900 dark:text-white">{{ __('admin.dashboard.recent.users') }}</h3>
                <a href="{{ route('admin.users.index') }}" class="text-sm text-primary-600 hover:text-primary-700 dark:text-primary-400">{{ __('admin.dashboard.recent.view_all') }}</a>
            </div>
            <div class="divide-y divide-slate-100 dark:divide-dark-border">
                @forelse($recentUsers as $user)
                <div class="px-5 py-3 flex items-center gap-3">
                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-primary-100 dark:bg-primary-900/30 flex items-center justify-center">
                        <span class="text-sm font-medium text-primary-600 dark:text-primary-400">{{ strtoupper(substr($user->name, 0, 1)) }}</span>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-slate-900 dark:text-white truncate">{{ $user->name }}</p>
                        <p class="text-xs text-slate-500 dark:text-slate-400 truncate">{{ $user->email }}</p>
                    </div>
                    <span class="text-xs text-slate-400">{{ $user->created_at->diffForHumans() }}</span>
                </div>
                @empty
                <div class="px-5 py-8 text-center text-sm text-slate-500 dark:text-slate-400">{{ __('admin.dashboard.recent.no_users') }}</div>
                @endforelse
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const isDark = document.documentElement.classList.contains('dark');
    const textColor = isDark ? '#94a3b8' : '#64748b';
    const gridColor = isDark ? 'rgba(148, 163, 184, 0.1)' : 'rgba(148, 163, 184, 0.2)';

    // User Chart
    const userCtx = document.getElementById('userChart');
    if (userCtx) {
        const userData = @json($userChart);
        new Chart(userCtx, {
            type: 'bar',
            data: {
                labels: userData.labels,
                datasets: [{
                    label: '{{ __('admin.dashboard.charts.new_users') }}',
                    data: userData.data,
                    backgroundColor: isDark ? 'rgba(99, 102, 241, 0.7)' : 'rgba(99, 102, 241, 0.8)',
                    borderRadius: 4,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    x: { grid: { display: false }, ticks: { color: textColor, maxRotation: 45, minRotation: 45 } },
                    y: { beginAtZero: true, grid: { color: gridColor }, ticks: { color: textColor } }
                }
            }
        });
    }


});
</script>
@endpush