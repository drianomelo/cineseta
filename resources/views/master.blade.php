<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineSeta | Home</title>

    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-685074a7.css') }}"> --}}

    @vite('resources/css/app.css')
</head>

<body class="w-full h-screen bg-gray-900">
    <main class="">
        @yield('content')
    </main>

    <script src="{{ asset('main.js') }}"></script>
    {{-- <script src="{{ asset('build/assets/app-ff9594e5.js') }}"></script> --}}
</body>

</html>
