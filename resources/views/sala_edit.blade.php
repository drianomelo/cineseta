@extends('master')

@section('content')
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

            <div class="flex items-center justify-center gap-4">
                <button
                    class="px-2 py-1 font-bold transition-all duration-500 bg-green-800 rounded-lg text-zinc-200 hover:bg-green-600 hover:text-zinc-50"
                    type="submit">Confirmar</button>
            </div>
        </form>
    </div>
@endsection
