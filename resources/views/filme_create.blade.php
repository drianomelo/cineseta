@extends('master')

@section('content')
    <h2>Criar Filme</h2>

    @if (session()->has('message'))
        {{ session()->get('message') }}
    @endif

    <form action="{{ route('filmes.store') }}" method="POST">
        @csrf
        <input type="text" name="capa" placeholder="Insira url da capa do filme">
        <input type="text" name="titulo" placeholder="Insira o título do filme">
        <input type="text" name="sinopse" placeholder="Insira a sinopse do filme">
        <input type="date" name="data_lancamento" placeholder="Insira a data de lançamento do filme">
        <input type="text" name="faixa_etaria" placeholder="Insira a faixa etária do filme">
        <button type="submit">Adicionar</button>
    </form>
@endsection
