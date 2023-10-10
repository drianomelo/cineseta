@extends('master')

@section('content')
    <div class="flex items-center justify-between px-10 pt-8">
        <a class="p-2 font-semibold bg-green-600 rounded-lg text-zinc-50" href="{{ route('sessoes.index') }}">Voltar para Sessões</a>
    </div>
    <div class="flex items-center justify-center w-full h-screen ">
        <div>
            <article class="flex items-center gap-5 p-5 rounded-lg bg-gray-950">
                <img src="{{$sessao->filme->capa}}" class="h-[300px] w-[220px]" alt="">
                <div class="flex items-start gap-4">
                    <div>
                        <h2 class="mb-2 text-xl font-bold text-yellow-500"> Sessão {{$sessao->id}} </h2>
                        <p class="mb-4 font-medium text-justify text-zinc-50"> Dia: {{$sessao->dia}}</p>
                        <p class="mb-4 font-medium text-justify text-zinc-50"> Horário: {{$sessao->horario}}</p>
                        <p class="mb-4 font-medium text-justify text-zinc-50"> Sala: Sala {{$sessao->sala->numero}}</p>
                        <p class="mb-4 font-medium text-justify text-zinc-50"> Filme: {{$sessao->filme->titulo}}</p>
                        <form action="{{ route('sessoes.destroy', ['sessao' => $sessao->id]) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="px-2 py-1 font-bold bg-red-800 rounded-lg text-zinc-200"
                                type="submit">Excluir</button>
                        </form>
                    </div>
                </div>
            </article>
        </div>
    @endsection
