<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'My Laravel App') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="antialiased">

    <div class="min-h-screen bg-gray-100">
        {{-- Navbar or header (optional) --}}
        @include('layouts.navbar')

        {{-- Main content --}}
        <main class="p-4">
            @yield('content')
        </main>
    </div>

    @livewireScripts
</body>
</html>
