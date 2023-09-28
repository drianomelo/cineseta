@extends('master')

@section('content')
    <h2>Editar Filme</h2>

    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif

    <img class="w-[200px]" src="{{ $filme->capa }}" alt="Capa do filme {{ $filme->titulo }}">

    <form action="{{ route('filmes.update', ['filme' => $filme->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="capa" value="{{ $filme->capa }}">
        <input type="text" name="titulo" value="{{ $filme->titulo }}">
        <input type="text" name="sinopse" value="{{ $filme->sinopse }}">
        <input type="text" name="faixa_etaria" value="{{ $filme->faixa_etaria }}">
        <input type="date" name="data_lancamento" value="{{ $filme->data_lancamento }}">
        <button type="submit">Editar</button>
        <form action="{{ route('filmes.destroy', ['filme' => $filme->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button class="px-2 py-1 font-bold bg-red-500 rounded-lg text-zinc-50" type="submit">Excluir</button>
        </form>
    </form>
@endsection
