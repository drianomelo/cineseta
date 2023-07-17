<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CineSeta') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased text-gray-900 font-inter">
    <div class="flex items-center min-h-screen px-5 pt-8 bg-center bg-cover bg-login">
        <div
            class="w-full px-7 py-[1.3rem] border-2 bg-opacity-90 bg-primary rounded-[2.5rem] border-border border-opacity-60">
            <a href="/" class="relative flex justify-center -top-14">
                <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
            </a>
            {{ $slot }}
        </div>
    </div>

    <script src="https://kit.fontawesome.com/555bf53180.js" crossorigin="anonymous"></script>
</body>

</html>
