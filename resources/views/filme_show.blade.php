@extends('master')

@section('content')
    <article class="flex flex-col w-full">
        <img class="w-[200px]" src="{{ $filme->capa }}" alt="Capa do filme {{ $filme->titulo }}">
        <h2>{{ $filme->titulo }}</h2>
        <form action="{{ route('filmes.destroy', ['filme' => $filme->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button class="px-2 py-1 font-bold bg-red-800 rounded-lg text-zinc-200" type="submit">Excluir</button>
        </form>
    </article>
@endsection
