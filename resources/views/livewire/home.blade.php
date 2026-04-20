<div>
    <h1 class="text-2xl font-semibold text-slate-900 dark:text-white">{{ __('dashboard.title') }}</h1>

    <div class="mt-6">
        <div class="bg-white dark:bg-dark-elevated rounded-xl shadow-sm border border-slate-200 dark:border-dark-border p-6 overflow-hidden relative">
            <div class="absolute top-0 right-0 p-4 opacity-10 pointer-events-none">
                <svg class="w-32 h-32 text-primary-500" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                </svg>
            </div>
            
            @auth
            <div class="relative z-10 flex items-center gap-5">
                <div class="w-16 h-16 rounded-full bg-gradient-to-br from-primary-500 to-primary-600 flex items-center justify-center text-white text-2xl font-bold shadow-md">
                    {{ substr($user->name, 0, 1) }}
                </div>
                <div>
                    <h2 class="text-xl font-bold text-slate-900 dark:text-white">Welcome back, {{ $user->name }}! 👋</h2>
                    <p class="text-slate-500 dark:text-slate-400 mt-1">Here is a quick overview of your account.</p>
                </div>
            </div>

            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-slate-50 dark:bg-dark-soft rounded-lg p-4 border border-slate-100 dark:border-dark-border">
                    <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Account Status</p>
                    <div class="mt-2 flex items-center gap-2">
                        <span class="w-2.5 h-2.5 rounded-full bg-green-500"></span>
                        <p class="font-medium text-slate-900 dark:text-white">Active</p>
                    </div>
                </div>
                <div class="bg-slate-50 dark:bg-dark-soft rounded-lg p-4 border border-slate-100 dark:border-dark-border">
                    <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Member Since</p>
                    <p class="mt-1 font-medium text-slate-900 dark:text-white">{{ $user->created_at->format('M d, Y') }}</p>
                </div>
                <div class="bg-slate-50 dark:bg-dark-soft rounded-lg p-4 border border-slate-100 dark:border-dark-border">
                    <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Email Address</p>
                    <p class="mt-1 font-medium text-slate-900 dark:text-white truncate" title="{{ $user->email }}">{{ $user->email }}</p>
                </div>
            </div>
            @else
            <div class="relative z-10">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Welcome to {{ my_app('title') }} 👋</h2>
                <p class="text-slate-500 dark:text-slate-400 mt-2 max-w-2xl">{{ my_app('description') ?? 'This is a sample home page accessible to everyone.' }}</p>
                
                <div class="mt-8 flex gap-4">
                    <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-6 py-2.5 bg-primary-600 hover:bg-primary-700 text-white text-sm font-medium rounded-lg transition-colors">Sign In</a>
                    <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-6 py-2.5 bg-white dark:bg-dark-soft border border-slate-200 dark:border-dark-border hover:bg-slate-50 dark:hover:bg-white/5 text-slate-700 dark:text-slate-200 text-sm font-medium rounded-lg transition-colors">Create Account</a>
                </div>
            </div>
            @endauth
        </div>
    </div>
</div>