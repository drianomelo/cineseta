@extends('master')

@section('content')
    <h2>Editar Filme</h2>

    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif

    <form action="{{ route('filmes.update', ['filme' => $filme->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">

        <img style="width: 200px" src="{{ $filme->capa }}" alt="Capa do filme {{ $filme->titulo }}">

        <input type="text" name="capa" value="{{ $filme->capa }}">
        <input type="text" name="titulo" value="{{ $filme->titulo }}">
        <input type="text" name="sinopse" value="{{ $filme->sinopse }}">
        <input type="text" name="faixa_etaria" value="{{ $filme->faixa_etaria }}">
        <input type="date" name="data_lancamento" value="{{ $filme->data_lancamento }}">
        <button type="submit">Editar</button>
    </form>
@endsection
