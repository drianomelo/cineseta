@extends('master')

@section('content')
<div class="flex items-center justify-between px-10 pt-8">
    <a class="p-2 font-semibold bg-green-600 rounded-lg text-zinc-50" href="{{ route('sessoes.index') }}">Voltar para Sessões</a>
</div>
    <div class="flex flex-col items-center justify-center w-full h-screen">

        @if (session()->has('message'))
            {{ session()->get('message') }}
        @endif


        <form class="w-[350px] flex flex-col items-center gap-5 bg-gray-950 p-6 rounded-xl"
            action="{{ route('sessoes.update', ['sessao' => $sessao->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PUT">

            <input
                class="w-full p-2 font-semibold text-gray-700 bg-transparent border-b-2 border-gray-900 outline-none placeholder:text-gray-800 placeholder:font-semibold"
                type="text" name="horario" value="{{ $sessao->horario }}">
            <input
                class="w-full p-2 font-semibold text-gray-700 bg-transparent border-b-2 border-gray-900 outline-none placeholder:text-gray-800 placeholder:font-semibold"
                type="date" name="dia" value="{{ $sessao->dia }}">
            <select name="filme_id" id="filme_id">
                <option value="" disabled selected>{{$sessao->filme->titulo}}</option>
                @foreach ($filmes as $filme)
                    <option value="{{ $filme->id }}">{{ $filme->titulo }}</option>
                @endforeach
            </select>
            <select name="sala_id" id="sala_id">
                <option value="" disabled selected>Sala  {{$sessao->sala->numero}}</option>
                @foreach ($salas as $sala)
                    <option value="{{ $sala->id }}">Sala {{ $sala->numero }}</option>
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
