@extends('master')

@section('content')
    <div class="flex items-center justify-center w-full h-screen ">
        <img class="absolute w-full opacity-5 -z-10" src="{{ $filme->capa }}" alt="Capa do filme {{ $filme->titulo }}">
        <div>
            <article class="flex flex-col items-center justify-center w-[600px] p-5 rounded-lg bg-gray-950">
                <div class="flex items-start gap-4">
                    <img class="w-2/5 rounded-md" src="{{ $filme->capa }}" alt="Capa do filme {{ $filme->titulo }}">
                    <div>
                        <h2 class="mb-2 text-xl font-bold text-yellow-500">{{ $filme->titulo }}</h2>
                        <p class="mb-4 font-medium text-justify text-zinc-50">{{ $filme->sinopse }}</p>
                        <form action="{{ route('filmes.destroy', ['filme' => $filme->id]) }}" method="POST">
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
