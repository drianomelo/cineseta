<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>CineSeta | login</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Tailwind -->
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col h-screen bg-primary">
    <!-- HEADER -->
    <x-header-layout />

    <!-- MAIN -->
    <main class="flex-1">
        <div class="w-full px-10 pb-6">
            <a href="#" class="flex items-center justify-between px-5 py-2 rounded-xl bg-primary-light">
                <p class="w-[80%] text-white text-lg flex flex-col"><span>Não assista</span> <span>de barriga
                        vazia !!!</span> <span class="font-black uppercase text-[15.8px]">peça seu lanche aqui</span>
                </p>
                <div class="flex items-center justify-center w-16 h-16 rounded-2xl bg-secondary"><i
                        class="text-4xl text-white rotate-45 fa-solid fa-arrow-right"></i></div>
            </a>
        </div>

        <div class="flex justify-between w-full gap-5 px-10 pb-6">
            <a href="#" class="flex-1 py-3 text-xl font-black text-center border-2 rounded-xl text-secondary bg-primary-light">Filmes</a>
            <a href="#" class="flex-1 py-3 text-xl text-center text-white rounded-xl bg-primary-light">Em breve</a>
        </div>
    </main>

    <!-- TAB BAR -->
    <nav>
        <ul class="flex items-end w-full h-20 justify-evenly">
            <x-tabbar.item href="#" src="{{ asset('images/icons/videoplay.svg') }}" alt="Icone de video play"
                title="Filmes" active="true" srcactive="{{ asset('images/icons/videoplay-red.svg') }}" />
            <x-tabbar.item href="#" src="{{ asset('images/icons/videotime.svg') }}" alt="Icone de video play"
                title="Em Breve" active="false" srcactive="{{ asset('images/icons/videotime-red.svg') }}" />
            <x-tabbar.item href="#" src="{{ asset('images/icons/food.svg') }}" alt="Icone de video play"
                title="Comida" active="false" srcactive="{{ asset('images/icons/food-red.svg') }}" />
            <x-tabbar.item href="#" src="{{ asset('images/icons/profile.svg') }}" alt="Icone de video play"
                title="Perfil" active="false" srcactive="{{ asset('images/icons/profile-red.svg') }}" />
        </ul>
    </nav>

    <script src="https://kit.fontawesome.com/555bf53180.js" crossorigin="anonymous"></script>
</body>

</html>
