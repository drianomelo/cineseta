@extends('master')

@section('content')
    <div class="flex flex-col items-center justify-center gap-4 p-4">
        <a class="absolute p-2 font-semibold bg-blue-600 rounded-lg left-8 top-4 text-zinc-50"
            href="{{ route('consultas.index') }}">Voltar</a>
        <div class="flex flex-col w-[600px] items-center p-6 border-4 border-gray-800 rounded-2xl">
            <h2 class="mb-2 font-semibold text-yellow-400">Consulta usando GROUP BY e HAVING.
            </h2>
            <p class="font-semibold text-center text-white">Essa consulta gera uma lista com todos os cinemas que possuem
                mais de uma sessão
            </p>
        </div>
        <div class="flex flex-col items-center justify-center w-full">
            <div class="flex items-center justify-center gap-4">
                @foreach ($cinemas as $cinema)
                    <div class="p-4 border-2 border-gray-800 rounded-xl">
                        <h3 class="font-semibold text-white">Nome do cinema: <span
                                class="text-blue-400">{{ $cinema->nome }}</span></h3>
                        <p class="font-semibold text-white">Quantidade de sessões: <span
                                class="text-green-400">{{ $cinema->total_sessoes }}</span></p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
