<footer class="bg-slate-50 dark:bg-dark-soft border-t border-slate-200 dark:border-dark-border">
    <!-- Main Footer -->
    <div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
        <div class="grid grid-cols-2 gap-8 md:grid-cols-4 lg:gap-12">

            <!-- Company Info -->
            <div class="col-span-2 md:col-span-1">
                <a href="{{ url('/') }}" class="inline-flex items-center gap-2">
                    @if(my_app('logo'))
                    <img src="{{ my_app('logo') }}" alt="{{ my_app('title') }}" class="h-8 w-auto">
                    @else
                    <span class="text-xl font-bold text-gradient-primary">
                        {{ my_app('title') }}
                    </span>
                    @endif
                </a>
                <p class="mt-4 text-sm text-slate-600 dark:text-slate-400 max-w-xs">
                    {{ my_app('description') }}
                </p>

                <!-- Social Links -->
                <div class="flex items-center gap-3 mt-6">
                    @php
                        $socialsSetting = setting('socials', []);
                        $socialLabels = app(\App\Livewire\Admin\Settings\Socials::class)->getSocialLabels();
                    @endphp
                    @foreach($socialLabels as $key => $data)
                        @if(!empty($socialsSetting[$key]))
                            <a href="{{ $socialsSetting[$key] }}" target="_blank" rel="noopener noreferrer" class="p-2 rounded-lg text-slate-400 hover:text-primary-600 hover:bg-primary-50 dark:hover:text-primary-400 dark:hover:bg-primary-900/20 transition-colors">
                                <span class="sr-only">{{ $data['label'] }}</span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="{{ $data['icon'] }}" />
                                </svg>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>

            <!-- Services -->
            <div>
                <h3 class="text-sm font-semibold text-slate-900 dark:text-white uppercase tracking-wider">
                    {{ __('common.nav.services') }}
                </h3>
                <ul class="mt-4 space-y-3">
                    <li>
                        <a href="#" class="text-sm text-slate-600 dark:text-slate-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                            other 1
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-slate-600 dark:text-slate-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                            other 2
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-slate-600 dark:text-slate-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                            other 3
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-slate-600 dark:text-slate-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                            API Access
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Support -->
            <div>
                <h3 class="text-sm font-semibold text-slate-900 dark:text-white uppercase tracking-wider">
                    {{ __('common.nav.company') }}
                </h3>
                <ul class="mt-4 space-y-3">
                    <li>
                        <a href="{{ route('page.show', 'about') }}" class="text-sm text-slate-600 dark:text-slate-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                            {{ __('common.nav.about_us') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('page.show', 'contact') }}" class="text-sm text-slate-600 dark:text-slate-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                            {{ __('common.nav.contact_us') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('docs.api') }}" class="text-sm text-slate-600 dark:text-slate-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                            API Documentation
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-slate-600 dark:text-slate-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                            {{ __('common.nav.help_center') }}
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Legal -->
            <div>
                <h3 class="text-sm font-semibold text-slate-900 dark:text-white uppercase tracking-wider">
                    {{ __('common.nav.legal') }}
                </h3>
                <ul class="mt-4 space-y-3">
                    <li>
                        <a href="{{ route('page.show', 'privacy-policy') }}" class="text-sm text-slate-600 dark:text-slate-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                            {{ __('common.nav.privacy_policy') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('page.show', 'terms-of-service') }}" class="text-sm text-slate-600 dark:text-slate-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                            {{ __('common.nav.terms_of_service') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('page.show', 'refund-policy') }}" class="text-sm text-slate-600 dark:text-slate-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                            {{ __('common.nav.refund_policy') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('page.show', 'disclaimer') }}" class="text-sm text-slate-600 dark:text-slate-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                            {{ __('common.nav.disclaimer') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Newsletter -->
        <div class="mt-12 pt-8 border-t border-slate-200 dark:border-dark-border">
            <div class="md:flex md:items-center md:justify-between">
                <div class="max-w-md">
                    <h3 class="text-sm font-semibold text-slate-900 dark:text-white">
                        {{ __('common.footer.subscribe_title') }}
                    </h3>
                    <p class="mt-1 text-sm text-slate-600 dark:text-slate-400">
                        {{ __('common.footer.subscribe_desc') }}
                    </p>
                </div>
                <form class="mt-4 md:mt-0 flex gap-2">
                    <input type="email"
                        placeholder="{{ __('common.footer.email_placeholder') }}"
                        class="flex-1 min-w-0 px-4 py-2.5 text-sm bg-white dark:bg-dark-elevated border border-slate-300 dark:border-dark-border rounded-lg text-slate-900 dark:text-white placeholder-slate-400 focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                    <button type="submit" class="btn btn-primary whitespace-nowrap">
                        {{ __('common.footer.subscribe') }}
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-slate-200 dark:border-dark-border bg-white dark:bg-dark-base">
        <div class="max-w-7xl mx-auto px-4 py-4 sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between text-center md:text-left">
                <p class="text-sm text-slate-500 dark:text-slate-400">
                    &copy; {{ date('Y') }} {{ setting('main.name', config('app.name')) }}. {{ __('common.footer.rights') }}
                </p>
                <div class="mt-2 md:mt-0 flex items-center justify-center md:justify-end gap-4">
                    <a href="#" class="text-sm text-slate-500 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-200 transition-colors">
                        {{ __('common.footer.status') }}
                    </a>
                    <span class="text-slate-300 dark:text-slate-600">|</span>
                    <a href="#" class="text-sm text-slate-500 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-200 transition-colors">
                        {{ __('common.footer.sitemap') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>