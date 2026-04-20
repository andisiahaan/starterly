<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Untitled' }} - {{ my_app('title') }}</title>
    <meta name="description" content="{{ $description ?? my_app('description') }}">
    <meta name="keywords" content="{{ $keywords ?? my_app('keywords') }}">

    @if(my_app('favicon'))
    <link rel="icon" href="{{ my_app('favicon') }}" type="image/x-icon">
    @endif

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    {!! setting('custom_tags.main_head_tags') !!}
</head>

<body class="font-sans antialiased text-slate-900 bg-white dark:bg-dark-base dark:text-white flex flex-col min-h-screen"
    x-data="{ 
          mobileMenuOpen: false,
          init() {
              const defaultTheme = '{{ my_app('default_theme') }}';
              const savedTheme = localStorage.getItem('theme');
              
              if (savedTheme === 'dark' || (!savedTheme && defaultTheme === 'dark') || 
                  (!savedTheme && defaultTheme === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                  document.documentElement.classList.add('dark');
              }
          }
      }"
    x-cloak>

    @include('layouts.partials.navigation')

    <!-- Optional Header -->
    @isset($header)
    <header class="bg-gradient-to-r from-primary-600 to-primary-700 dark:from-dark-elevated dark:to-dark-muted">
        <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
            {{ $header }}
        </div>
    </header>
    @endisset

    <main class="flex-grow max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8 w-full">
        @include('layouts.partials.alert')
        @include('layouts.partials.toast')
        {{ $slot }}
    </main>

    @include('layouts.partials.footer')

    <!-- Cookie Consent Banner -->
    <x-cookie-consent />
    {!! setting('custom_tags.main_body_tags') !!}
    @livewire('livewire-modal')
    @livewireScripts
</body>

</html>