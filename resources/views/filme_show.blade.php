@extends('master')

@section('content')
    <article class="flex flex-col w-full">
        <img class="w-[200px]" src="{{ $filme->capa }}" alt="Capa do filme {{ $filme->titulo }}">
        <h2>{{ $filme->titulo }}</h2>
    </article>
@endsection
