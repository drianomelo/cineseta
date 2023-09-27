@extends('master')

@section('content')
    <h2>FILMES</h2>
    <ul>
        @foreach ($filmes as $filme)
            <li>
                <h3>{{ $filme->titulo }}</h3>
                <p>{{ $filme->sinopse }}</p>
                <span>{{ $filme->data_lancamento }}</span>
                <span>{{ $filme->faixa_etaria }}</span>
            </li>
        @endforeach
    </ul>
@endsection
