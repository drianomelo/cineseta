@extends('master')

@section('content')
    <div class="flex flex-wrap gap-8 p-10">
        @foreach ($filmes as $filme)
            <article class="w-[300px] relative group  ">
                <img class="w-full h-[380px] rounded-xl"
                    src="{{ $filme->capa }}" alt="Capa do filme {{ $filme->titulo }}">
                <span
                    class="px-2 py-[2px] text-sm font-bold bg-green-500 rounded-md text-zinc-50 absolute top-2 right-8 opacity-0 group-hover:right-2 group-hover:opacity-100 transition-all duration-500">{{ $filme->faixa_etaria }}</span>
                <div
                    class="absolute flex w-full transition-all duration-500 opacity-0 bottom-12 justify-evenly group-hover:bottom-6 group-hover:opacity-100">
                    <a class="px-2 py-1 font-bold bg-blue-500 rounded-lg text-zinc-50"
                        href="{{ route('filmes.edit', ['filme' => $filme->id]) }}">Editar</a>
                    <form action="{{ route('filmes.destroy', ['filme' => $filme->id]) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="px-2 py-1 font-bold bg-red-500 rounded-lg text-zinc-50"
                            type="submit">Excluir</button>
                    </form>
                </div>
                <div
                    class="absolute flex flex-col items-center w-full p-2 top-[250px] -z-10 transition-all duration-500 group-hover:top-[380px]">
                    <h3 class="text-base font-bold text-center text-yellow-400">{{ $filme->titulo }}</h3>
                    <span class="text-sm font-bold text-zinc-50">{{ $filme->data_lancamento }}</span>
                </div>
            </article>
        @endforeach
    </div>
    <a href="{{ route('filmes.create') }}">Adicionar Filme</a>
@endsection
