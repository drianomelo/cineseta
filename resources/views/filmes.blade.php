@extends('master')

@section('content')
    <h2>FILMES</h2>
    <ul style="display: flex">
        @foreach ($filmes as $filme)
            <li>
                <img style="width: 200px" src="{{ $filme->capa }}" alt="Capa do filme {{ $filme->titulo }}">
                <h3>{{ $filme->titulo }}</h3>
                <p>{{ $filme->sinopse }}</p>
                <span>{{ $filme->data_lancamento }}</span>
                <span>{{ $filme->faixa_etaria }}</span>
            </li>
        @endforeach
    </ul>
@endsection
