<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
        if (localStorage.getItem('dark-mode') == 'true' || !('dark-mode' in localStorage)) {
            document.querySelector('html').classList.add('dark');
        } else {
            document.querySelector('html').classList.remove('dark');
        }
    </script>
</head>
<body class="font-inter antialiased bg-white text-gray-900 dark:bg-gray-900 dark:text-gray-100 tracking-tight">
<div class="flex flex-col min-h-screen overflow-hidden">

@include('layouts.header')

<!-- Page content -->
    <div class="flex-grow">

        <!-- Page illustration -->
        <div class="relative max-w-6xl mx-auto h-0 pointer-events-none -z-1" aria-hidden="true">
            <svg class="absolute top-0 right-0 transform translate-x-1/2 -mr-16 dark:opacity-40" width="800" height="502"
                 fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="400" cy="102" r="400" fill="url(#heroglow_paint0_radial)" fill-opacity=".6"/>
                <circle cx="209" cy="289" r="170" fill="url(#heroglow_paint1_radial)" fill-opacity=".4"/>
                <defs>
                    <radialGradient id="heroglow_paint0_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                    gradientTransform="rotate(90 149 251) scale(315.089)">
                        <stop stop-color="#3ABAB4"/>
                        <stop offset="1" stop-color="#3ABAB4" stop-opacity=".01"/>
                    </radialGradient>
                    <radialGradient id="heroglow_paint1_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                                    gradientTransform="rotate(90 -40 249) scale(133.913)">
                        <stop stop-color="#667EEA"/>
                        <stop offset="1" stop-color="#667EEA" stop-opacity=".01"/>
                    </radialGradient>
                </defs>
            </svg>
        </div>
        {{ $slot }}
    </div>
</div>
</body>
</html>
