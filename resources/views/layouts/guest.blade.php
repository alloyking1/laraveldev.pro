<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- @if ($post->meta != null)
            <meta
                name="description"
                content="{{ $post->meta->meta_description ? $post->meta->meta_description : ''  }}"
            />
            <meta
                name="keyword"
                content="{{ $post->meta->meta_keyword ? $post->meta->meta_keyword : ''  }}"
            />
            <meta
                name="robots"
                content="{{ $post->meta->meta_robots ? $post->meta->meta_robots : ''  }}"
            />
        @endif --}}

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <x-head.tinymce-config/>
        <link rel="stylesheet" href="{{ asset('/prism.css') }}">
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
    </body>
</html>
