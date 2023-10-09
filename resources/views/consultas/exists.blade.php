@extends('master')

@section('content')
    <div class="flex flex-col items-center justify-center gap-4 p-4">
        <a class="absolute p-2 font-semibold bg-blue-600 rounded-lg left-8 top-4 text-zinc-50"
            href="{{ route('consultas.index') }}">Voltar</a>
        <div class="flex flex-col w-[600px] items-center p-6 border-4 border-gray-800 rounded-2xl">
            <h2 class="mb-2 font-semibold text-yellow-400">Consulta usando operador EXISTS.
            </h2>
            <p class="font-semibold text-center text-white">Essa consulta filtra todos as sessões que tenham um filme de
                faixa etária <span class="text-green-400">18</span>
            </p>
        </div>
        <div class="flex flex-col items-center justify-center w-full">
            <div class="flex items-center justify-center gap-4">
                @foreach ($sessoes as $sessao)
                    <div class="p-4 border-2 border-gray-800 rounded-xl">
                        <h3 class="mb-3 font-semibold text-white">Sessão: <span
                                class="text-blue-400">{{ $sessao->horario }}</span> / <span
                                class="text-green-400">{{ $sessao->dia }}</span></h3>
                        <a class="p-2 font-semibold text-center transition-all duration-500 bg-green-900 rounded-lg cursor-pointer text-zinc-200 hover:bg-green-600 hover:text-zinc-50"
                            href="{{ route('sessoes.show', ['sessao' => $sessao->id]) }}">
                            Ir para sessão
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
