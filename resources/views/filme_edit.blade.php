@extends('master')

@section('content')
    <div class="flex flex-col items-center justify-center w-full h-screen">

        @if (session()->has('message'))
            {{ session()->get('message') }}
        @endif


        <form class="w-[350px] flex flex-col items-center gap-5 bg-gray-950 p-6 rounded-xl"
            action="{{ route('filmes.update', ['filme' => $filme->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PUT">

            <img class="w-full rounded-md" src="{{ $filme->capa }}" alt="Capa do filme {{ $filme->titulo }}">

            <input
                class="w-full p-2 font-semibold text-gray-700 bg-transparent border-b-2 border-gray-900 outline-none placeholder:text-gray-800 placeholder:font-semibold"
                type="text" name="capa" value="{{ $filme->capa }}">
            <input
                class="w-full p-2 font-semibold text-gray-700 bg-transparent border-b-2 border-gray-900 outline-none placeholder:text-gray-800 placeholder:font-semibold"
                type="text" name="titulo" value="{{ $filme->titulo }}">
            <input
                class="w-full p-2 font-semibold text-gray-700 bg-transparent border-b-2 border-gray-900 outline-none placeholder:text-gray-800 placeholder:font-semibold"
                type="text" name="sinopse" value="{{ $filme->sinopse }}">
            <input
                class="w-full p-2 font-semibold text-gray-700 bg-transparent border-b-2 border-gray-900 outline-none placeholder:text-gray-800 placeholder:font-semibold"
                type="text" name="faixa_etaria" value="{{ $filme->faixa_etaria }}">
            <input
                class="w-full p-2 font-semibold text-gray-700 bg-transparent border-b-2 border-gray-900 outline-none placeholder:text-gray-800 placeholder:font-semibold"
                type="date" name="data_lancamento" value="{{ $filme->data_lancamento }}">
            <div class="flex items-center justify-center gap-4">
                <button class="px-2 py-1 font-bold bg-green-800 rounded-lg text-zinc-200" type="submit">Confirmar</button>
            </div>
        </form>
    </div>
@endsection
