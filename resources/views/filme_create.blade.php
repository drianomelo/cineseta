@extends('master')

@section('content')
    <div class="flex flex-col items-center justify-center w-full h-screen">
        <h2>Criar Filme</h2>

        @if (session()->has('message'))
            {{ session()->get('message') }}
        @endif


        <form class="w-[350px] flex flex-col gap-4 bg-gray-950 p-6 rounded-xl" action="{{ route('filmes.store') }}" method="POST">
            @csrf
            <input class="p-2 bg-transparent border-b " type="text" name="capa" placeholder="Insira url da capa do filme">
            <input class="p-2 bg-transparent border-b " type="text" name="titulo" placeholder="Insira o título do filme">
            <input class="p-2 bg-transparent border-b " type="text" name="sinopse" placeholder="Insira a sinopse do filme">
            <input class="p-2 bg-transparent border-b " type="date" name="data_lancamento" placeholder="Insira a data de lançamento do filme">
            <input class="p-2 bg-transparent border-b " type="text" name="faixa_etaria" placeholder="Insira a faixa etária do filme">
            <button type="submit">Adicionar</button>
        </form>
    </div>
@endsection
