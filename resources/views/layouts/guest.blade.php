<!DOCTYPE html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
        <x-blog.seo.google-analytics/>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="@yield('meta_description')">
        <meta name="keyword" content="@yield('meta_keywords')">
        <meta name="robots" content="@yield('meta_robots')">
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('/prism.css') }}">
        {{-- @livewireStyles --}}
    </head>

    <body class="font-sans text-gray-900bg-gray-100 antialiased">
        <div class="w-full sticky top-0">
            @include('layouts.guest-navigation')
        </div>
        <div>
            {{ $slot }}
        </div>
        <x-footer/>
        <script src="{{ asset('/prism.js') }}"></script>
        {{-- @livewireScripts --}}
    </body>
</html>
