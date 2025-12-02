<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>{{ config('app.name', 'My Laravel App') }}</title>
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
      integrity="sha512-+3x6k..."
      crossorigin="anonymous" referrerpolicy="no-referrer" />


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="antialiased">

    <div class="min-h-screen bg-gray-100">

       
        {{-- Navbar or header (optional) --}}
        @include('layouts.navbar') 

        {{-- Main content --}}
        <main class="p-4"> 
    {{ $slot }} 
</main>
    </div>

    @livewireScripts
</body>
</html>
