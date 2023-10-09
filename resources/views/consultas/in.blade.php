@extends('master')

@section('content')
    <div class="flex flex-col items-center justify-center gap-4 p-4">
        <a class="absolute p-2 font-semibold bg-blue-600 rounded-lg left-8 top-4 text-zinc-50"
            href="{{ route('consultas.index') }}">Voltar</a>
        <div class="flex flex-col w-[600px] items-center p-6 border-4 border-gray-800 rounded-2xl">
            <h2 class="mb-2 font-semibold text-yellow-400">Consulta usando operador IN.
            </h2>
            <p class="font-semibold text-center text-white">Essa consulta filtra todos os filmes que tenham a faixa etária
                igual a um dos itens do array <span class="text-green-400">['livre' , '10' , '12']</span>
            </p>
        </div>
        <div class="flex flex-col items-center justify-center w-full">
            <div class="flex items-center justify-center gap-4">
                @foreach ($filmes as $filme)
                    <a class="flex flex-col items-center" href="{{ route('filmes.show', ['filme' => $filme->id]) }}">
                        <img class="w-[200px] h-[260px] rounded-xl mb-2" src="{{ $filme->capa }}" alt="Capa do filme">
                        <p class="font-semibold text-blue-400">{{ $filme->faixa_etaria }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
