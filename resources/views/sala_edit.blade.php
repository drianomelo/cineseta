@extends('master')

@section('content')
<div class="flex items-center justify-between px-10 pt-8">
    <a class="p-2 font-semibold bg-green-600 rounded-lg text-zinc-50" href="{{ route('salas.index') }}">Voltar para Salas</a>
</div>
    <div class="flex flex-col items-center justify-center w-full h-screen">

        @if (session()->has('message'))
            {{ session()->get('message') }}
        @endif


        <form class="w-[350px] flex flex-col items-center gap-5 bg-gray-950 p-6 rounded-xl"
            action="{{ route('salas.update', ['sala' => $sala->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PUT">

            <input
                class="w-full p-2 font-semibold text-gray-700 bg-transparent border-b-2 border-gray-900 outline-none placeholder:text-gray-800 placeholder:font-semibold"
                type="text" name="numero" value="{{ $sala->numero }}">
            <input
                class="w-full p-2 font-semibold text-gray-700 bg-transparent border-b-2 border-gray-900 outline-none placeholder:text-gray-800 placeholder:font-semibold"
                type="text" name="capacidade" value="{{ $sala->capacidade }}">
            <select name="cinema_id" id="cinema_id">
                <option value="" disabled selected>{{$sala->cinema->nome}}</option>
                @foreach ($cinemas as $cinema)
                    <option value="{{ $cinema->id }}">{{ $cinema->nome }}</option>
                @endforeach
            </select>
            <div class="flex items-center justify-center gap-4">
                <button
                    class="px-2 py-1 font-bold transition-all duration-500 bg-green-800 rounded-lg text-zinc-200 hover:bg-green-600 hover:text-zinc-50"
                    type="submit">Confirmar</button>
            </div>
        </form>
    </div>
@endsection
