@extends('master')

@section('content')
    <div class="flex items-center justify-between px-10 pt-8">
        <a class="p-2 font-semibold bg-green-600 rounded-lg text-zinc-50" href="{{ route('home') }}">Voltar</a>
        <a class="p-2 font-semibold bg-green-600 rounded-lg text-zinc-50" href="{{ route('salas.create') }}">Adicionar
            Sala
        </a>
    </div>
    <div class="flex flex-wrap justify-center gap-20 p-10">
        @foreach ($salas as $sala)
            <div class="relative flex flex-wrap gap-6 group">
                <div class="p-2 font-semibold bg-green-600 rounded-lg text-zinc-50" >Sala {{$sala->numero}}
                    <div
                        class="flex w-full gap-2 justify-evenly">
                        <a class="px-2 py-1 font-bold bg-blue-500 rounded-lg text-zinc-50"
                            href="{{ route('salas.edit', ['sala' => $sala->id]) }}">Editar</a>
                        <a class="px-2 py-1 font-bold bg-indigo-700 rounded-lg text-zinc-50"
                            href="{{ route('salas.show', ['sala' => $sala->id]) }}">Visualizar</a>
                    </div>
            </div>
        @endforeach
    </div>
@endsection
