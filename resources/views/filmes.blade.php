@extends('master')

@section('content')
    <h2>FILMES</h2>
    <a href="{{ route('filmes.create') }}">Adicionar Filme</a>
    <ul style="display: flex">
        @foreach ($filmes as $filme)
            <li>
                <img style="width: 200px" src="{{ $filme->capa }}" alt="Capa do filme {{ $filme->titulo }}">
                <h3>{{ $filme->titulo }}</h3>
                <p>{{ $filme->sinopse }}</p>
                <span>{{ $filme->data_lancamento }}</span>
                <span>{{ $filme->faixa_etaria }}</span>
                <a href="{{ route('filmes.edit', ['filme' => $filme->id]) }}">Editar</a>
                <form action="{{ route('filmes.destroy', ['filme' => $filme->id]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
