@extends('master')

@section('content')
    <div class="flex flex-col items-center justify-center gap-4 p-4">
        <a class="absolute p-2 font-semibold bg-blue-600 rounded-lg left-8 top-4 text-zinc-50"
            href="{{ route('consultas.index') }}">Voltar</a>
        <div class="flex flex-col w-[600px] items-center p-6 border-4 border-gray-800 rounded-2xl">
            <h2 class="font-semibold text-yellow-400">Consulta usando mais de um JOIN
            </h2>
            <form class="flex flex-col items-center justify-center gap-2 mt-1 mb-4"
                action="{{ route('consultas.multiple-join') }}" method="GET" name="multiple-join" id="multiple-join">
                <input
                    class="p-2 mb-3 font-semibold text-gray-700 bg-transparent border-b-2 border-gray-800 outline-none w-[400px] placeholder:text-gray-800 placeholder:font-semibold"
                    placeholder="Pesquise pelo id da sessão" type="text" name="search" id="search" required>
                <button
                    class="w-2/4 p-1 font-semibold transition-all duration-500 bg-green-900 rounded-lg cursor-pointer text-zinc-200 hover:bg-green-600 hover:text-zinc-50"
                    type="button" onclick="submitForm('multiple-join')">CONSULTAR</button>
            </form>
        </div>
        <div class="flex flex-col items-center justify-center w-full">
            @if ($search)
                <p class="mb-3 font-semibold text-yellow-400">Resultado da sessão: <span
                        class="text-blue-500">{{ $search }}</span>
                </p>
                <div class="flex items-center justify-center gap-4">
                    @foreach ($sessoes as $sessao)
                        <div class="flex gap-4">
                            <a href="{{ route('filmes.show', ['filme' => $sessao->id]) }}">
                                <img class="w-[200px] h-[260px] rounded-xl" src="{{ $sessao->capa }}"
                                    alt="Capa do filme {{ $search }}">
                            </a>
                            <div class="flex flex-col gap-2">
                                <h3 class="text-xl font-bold text-white">Sessão {{ $search }}</h3>
                                <p class="font-semibold text-white">horário: <span
                                        class="text-blue-400">{{ $sessao->horario }}</span></p>
                                <p class="font-semibold text-white">dia: <span
                                        class="text-blue-400">{{ $sessao->dia }}</span></p>
                                <p class="font-semibold text-white">filme: <span
                                        class="text-green-400">{{ $sessao->titulo }}</span></p>
                                <p class="font-semibold text-white">classificação: <span
                                        class="text-green-400">{{ $sessao->faixa_etaria }}</span>
                                </p>
                                <p class="font-semibold text-white">sala: <span
                                        class="text-orange-400">{{ $sessao->numero }}</span>
                                </p>
                                <p class="font-semibold text-white">capacidade: <span
                                        class="text-orange-400">{{ $sessao->capacidade }}</span>
                                </p>
                                <p class="font-semibold text-white">cinema: <span
                                        class="text-purple-400">{{ $sessao->nome }}</span>
                                </p>
                                <a class="w-10 p-1 font-semibold text-center transition-all duration-500 bg-blue-900 rounded-lg cursor-pointer w- text-zinc-200 hover:bg-blue-600 hover:text-zinc-50"
                                    href="{{ route('sessoes.show', ['sessao' => $search]) }}">Ir</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
            @if (count($sessoes) == 0)
                <p class="mb-3 font-semibold text-red-400">Não existe sessão com esse id</span></p>
            @endif
        </div>
    </div>
@endsection
