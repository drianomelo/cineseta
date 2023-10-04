@extends('master')

@section('content')
    <div class="flex flex-col items-center justify-center w-full h-screen">
        <div class="bg-green-400">
            @if (session()->has('message'))
                {{ session()->get('message') }}
            @endif
        </div>
        <form class="w-[350px] flex flex-col items-center gap-5 bg-gray-950 p-6 rounded-xl"
            action="{{ route('salas.store') }}" method="POST">
            @csrf
            <input
                class="w-full p-2 font-semibold text-gray-700 bg-transparent border-b-2 border-gray-900 outline-none placeholder:text-gray-800 placeholder:font-semibold"
                type="text" name="numero" placeholder="Insira o número da sala">
            <input
                class="w-full p-2 font-semibold text-gray-700 bg-transparent border-b-2 border-gray-900 outline-none placeholder:text-gray-800 placeholder:font-semibold"
                type="text" name="capacidade" placeholder="Insira a capacidade da sala">
            <select name="cinema_id" id="cinema_id">
                <option value="" disabled selected>Selecione o cinema</option>
                @foreach ($cinemas as $cinema)
                    <option value="{{ $cinema->id }}">{{ $cinema->nome }}</option>
                @endforeach
            </select>
            <button class="w-2/4 p-1 font-semibold transition-all duration-500 bg-green-900 rounded-lg text-zinc-200 hover:bg-green-600 hover:text-zinc-50" type="submit">Adicionar</button>
        </form>
    </div>
@endsection
