<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex flex-col items-stretch">
            <header class="flex flex-col w-full items-stretch">
                @auth
                    @include('layouts.navigation')
                @else
                   @include("layouts.guestNav")
                @endauth
            </header>

            <!-- Page Content -->
            <main class="flex flex-1 mb-1 ">
                @include("layouts.sidebar")
                <section class="p-4 bg-gray-100 dark:bg-gray-900 w-full flex flex-col text-gray-700 dark:text-gray-200">
                    {{ $slot }}
                </section>
            </main>
        </div>
    </body>
</html>
