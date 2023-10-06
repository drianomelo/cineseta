@extends('master')

@section('content')
    <div class="flex flex-col items-center justify-center gap-4 p-4">
        <div class="flex flex-col w-[600px] items-center p-6 border-4 border-gray-800 rounded-2xl">
            <h2 class="font-semibold text-yellow-400">Consulta simples usando somente o básico SELECT, FROM, WHERE.
            </h2>
            <form class="flex flex-col items-center justify-center mt-1 mb-4" action="{{ route('consultas.basic') }}"
                method="GET" name="basic" id="basic">
                <input
                    class="p-2 mb-3 font-semibold text-gray-700 bg-transparent border-b-2 border-gray-800 outline-none w-[400px] placeholder:text-gray-800 placeholder:font-semibold"
                    placeholder="Pesquise pelo título do filme" type="text" name="search" id="search" required>
                <button
                    class="w-2/4 p-1 font-semibold transition-all duration-500 bg-green-900 rounded-lg cursor-pointer text-zinc-200 hover:bg-green-600 hover:text-zinc-50"
                    type="button" onclick="submitForm('basic')">CONSULTAR</button>
            </form>
            @if ($search)
                <p class="mb-3 font-semibold text-yellow-400">Resultado para: <span
                        class="text-blue-500">{{ $search }}</span></p>
                @foreach ($filmes as $filme)
                    <a href="{{ route('filmes.show', ['filme' => $filme->id]) }}">
                        <img class="w-[200px] rounded-xl" src="{{ $filme->capa }}" alt="Capa do filme {{ $search }}">
                    </a>
                @endforeach
            @endif
            @if (count($filmes) == 0)
                <p class="mb-3 font-semibold text-red-400">Não existe filme com esse título</span></p>
            @endif
        </div>

        <div class="flex flex-col w-[600px] items-center p-6 border-4 border-gray-800 rounded-2xl">
            <h2 class="font-semibold text-yellow-400">Consulta usando LIKE
            </h2>
            <form class="flex flex-col items-center justify-center mt-1 mb-4" action="{{ route('consultas.like') }}"
                method="GET" name="like" id="like">
                <input
                    class="p-2 mb-3 font-semibold text-gray-700 bg-transparent border-b-2 border-gray-800 outline-none w-[400px] placeholder:text-gray-800 placeholder:font-semibold"
                    placeholder="Pesquise pelo título do filme" type="text" name="search" id="search" required>
                <button
                    class="w-2/4 p-1 font-semibold transition-all duration-500 bg-green-900 rounded-lg cursor-pointer text-zinc-200 hover:bg-green-600 hover:text-zinc-50"
                    type="button" onclick="submitForm('like')">CONSULTAR</button>
            </form>
            @if ($search)
                <p class="mb-3 font-semibold text-yellow-400">Resultado para: <span
                        class="text-blue-500">{{ $search }}</span></p>
                @foreach ($filmes as $filme)
                    <a href="{{ route('filmes.show', ['filme' => $filme->id]) }}">
                        <img class="w-[200px] rounded-xl" src="{{ $filme->capa }}" alt="Capa do filme {{ $search }}">
                    </a>
                @endforeach
            @endif
            @if (count($filmes) == 0)
                <p class="mb-3 font-semibold text-red-400">Não existe filme com esse título</span></p>
            @endif
        </div>
    </div>
@endsection
