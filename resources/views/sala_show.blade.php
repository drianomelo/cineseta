@extends('master')

@section('content')
    <div class="flex items-center justify-between px-10 pt-8">
        <a class="p-2 font-semibold bg-green-600 rounded-lg text-zinc-50" href="{{ route('salas.index') }}">Voltar para Salas</a>
    </div>
    <div class="flex items-center justify-center w-full h-screen ">

        <div>
            <article class="flex flex-col items-center justify-center w-[600px] p-5 rounded-lg bg-gray-950">
                <div class="flex items-start gap-4">
                    <div>
                        <h2 class="mb-2 text-xl font-bold text-yellow-500"> Sala {{ $sala->numero }}</h2>
                        <p class="mb-4 font-medium text-justify text-zinc-50">Capacidade: {{ $sala->capacidade }} assentos</p>
                        <form action="{{ route('salas.destroy', ['sala' => $sala->id]) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="px-2 py-1 font-bold bg-red-800 rounded-lg text-zinc-200"
                                type="submit">Excluir</button>
                        </form>
                    </div>
                </div>

            </article>
        </div>
    @endsection
