@extends('master')

@section('content')
<div class="flex items-center justify-between px-10 pt-8">
    <a class="p-2 font-semibold bg-green-600 rounded-lg text-zinc-50" href="{{ route('sessoes.index') }}">Voltar para Sessões</a>
</div>
    <div class="flex flex-col items-center justify-center w-full h-screen">
        <div class="bg-green-400">
            @if (session()->has('message'))
                {{ session()->get('message') }}
            @endif
        </div>
        <form class="w-[350px] flex flex-col items-center gap-5 bg-gray-950 p-6 rounded-xl"
            action="{{ route('sessoes.store') }}" method="POST">
            @csrf
            <input
                class="w-full p-2 font-semibold text-gray-700 bg-transparent border-b-2 border-gray-900 outline-none placeholder:text-gray-800 placeholder:font-semibold"
                type="text" name="horario" placeholder="Insira o horário da sessão">
            <input
                class="w-full p-2 font-semibold text-gray-700 bg-transparent border-b-2 border-gray-900 outline-none placeholder:text-gray-800 placeholder:font-semibold"
                type="date" name="dia" placeholder="Insira a data da sessão">

            <select name="filme_id" id="filme_id">
                <option value="" disabled selected>Selecione o filme</option>
                @foreach ($filmes as $filme)
                    <option value="{{ $filme->id }}">{{ $filme->titulo }}</option>
                @endforeach
            </select>
            <select name="sala_id" id="sala_id">
                <option value="" disabled selected>Selecione a sala</option>
                @foreach ($salas as $sala)
                    <option value="{{ $sala->id }}">Sala {{ $sala->numero }}</option>
                @endforeach
            </select>
            <button class="w-2/4 p-1 font-semibold transition-all duration-500 bg-green-900 rounded-lg text-zinc-200 hover:bg-green-600 hover:text-zinc-50" type="submit">Adicionar</button>
        </form>
    </div>
@endsection
