@extends('master')

@section('content')
    <div class="flex flex-col items-center justify-center w-full h-screen">
        <div class="bg-green-400">
            @if (session()->has('message'))
                {{ session()->get('message') }}
            @endif
        </div>

        <form class="w-[350px] flex flex-col items-center gap-5 bg-gray-950 p-6 rounded-xl"
            action="{{ route('filmes.store') }}" method="POST">
            @csrf
            <input
                class="w-full p-2 font-semibold text-gray-700 bg-transparent border-b-2 border-gray-900 outline-none placeholder:text-gray-800 placeholder:font-semibold"
                type="text" name="capa" placeholder="Insira url da capa do filme">
            <input
                class="w-full p-2 font-semibold text-gray-700 bg-transparent border-b-2 border-gray-900 outline-none placeholder:text-gray-800 placeholder:font-semibold"
                type="text" name="titulo" placeholder="Insira o título do filme">
            <input
                class="w-full p-2 font-semibold text-gray-700 bg-transparent border-b-2 border-gray-900 outline-none placeholder:text-gray-800 placeholder:font-semibold"
                type="text" name="sinopse" placeholder="Insira a sinopse do filme">
            <input
                class="w-full p-2 font-semibold text-gray-700 bg-transparent border-b-2 border-gray-900 outline-none placeholder:text-gray-800 placeholder:font-semibold"
                type="date" name="data_lancamento" placeholder="Insira a data de lançamento do filme">
            <input
                class="w-full p-2 font-semibold text-gray-700 bg-transparent border-b-2 border-gray-900 outline-none placeholder:text-gray-800 placeholder:font-semibold"
                type="text" name="faixa_etaria" placeholder="Insira a faixa etária do filme">
            <button class="w-2/4 p-1 font-semibold bg-green-900 rounded-lg text-zinc-200" type="submit">Adicionar</button>
        </form>
    </div>
@endsection
