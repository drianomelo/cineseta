@extends('master')

@section('content')
    <div class="flex flex-col items-center justify-center gap-4 p-4">
        <a class="absolute p-2 font-semibold bg-blue-600 rounded-lg left-8 top-4 text-zinc-50"
            href="{{ route('consultas.index') }}">Voltar</a>
        <div class="flex flex-col w-[600px] items-center p-6 border-4 border-gray-800 rounded-2xl">
            <h2 class="font-semibold text-yellow-400">Consulta usando função de agregação.
            </h2>
            <form class="flex flex-col items-center justify-center mt-1 mb-4" action="{{ route('consultas.agregacao') }}"
                method="GET" name="agregacao" id="agregacao">
                <select name="search" id="search" required
                    class="p-2 mb-3 font-semibold text-gray-700 bg-transparent border-b-2 border-gray-800 outline-none w-[400px] placeholder:text-gray-800 placeholder:font-semibold">
                    <option value="none" disabled selected>Escolha uma opção abaixo</option>
                    <option value="filmes">Filmes</option>
                    <option value="salas">Salas</option>
                    <option value="sessoes">Sessões</option>
                    <option value="cinemas">Cinemas</option>
                </select>
                <button
                    class="w-2/4 p-1 font-semibold transition-all duration-500 bg-green-900 rounded-lg cursor-pointer text-zinc-200 hover:bg-green-600 hover:text-zinc-50"
                    type="button" onclick="submitForm('agregacao')">CONSULTAR</button>
            </form>
        </div>
        <div class="flex flex-col items-center justify-center w-full">
            @if ($search)
                <p class="mb-3 font-semibold text-yellow-400">Resultado para: <span
                        class="text-blue-500">{{ $search }}</span>
                </p>
                <div class="flex items-center justify-center gap-4">
                    <p class="font-semibold text-white">Quantidade de {{ $search }}: <span class="text-blue-400">{{ $count }}</span>
                    </p>
                </div>
            @endif
        </div>
    </div>
@endsection
