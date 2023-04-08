<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="bg-white">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header ?? null }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <div class="sm:mt-36 mt-0">
            <div class=" mx-auto">
                <div class="text-gray-900">
                    <div class="lg:flex lg:-mx-2">
                        @include('layouts.sidebar')
                        <main class="w-full h-screen">
                            {{ $slot }}
                        </main>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @stack('scripts')
</body>

</html>
