@extends('master')

@section('content')
    <div class="flex items-center justify-between px-10 pt-8">
        <a class="p-2 font-semibold bg-green-600 rounded-lg text-zinc-50" href="{{ route('home') }}">Voltar</a>
        <a class="p-2 font-semibold bg-green-600 rounded-lg text-zinc-50" href="{{ route('sessoes.create') }}">Adicionar
            Sessão</a>
    </div>
    <div class="flex flex-wrap justify-center gap-20 p-10">
        @foreach ($sessoes as $sessao)
            @if(!$sessao->filme || !$sessao->sala)
                <div class="relative group grayscale">
                    <div class="flex flex-col gap-2 p-2 font-semibold bg-green-600 rounded-lg text-zinc-50" >
                        {{$sessao->dia}}, {{$sessao->horario}}
                        <div
                            class="flex w-full gap-4 justify-evenly">
                            <form action="{{ route('sessoes.destroy', ['sessao' => $sessao->id]) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="px-2 py-1 font-bold bg-red-800 rounded-lg text-zinc-200"
                                    type="submit">Excluir</button>
                            </form>
                        </div>
                    </div>
                    <p class="mt-2 font-extrabold text-white">FILME OU SALA EXCLUIDOS</p>
                </div>

            @else
                <div class="relative group">
                    <div class="flex flex-col gap-2 p-2 font-semibold bg-green-600 rounded-lg text-zinc-50" >
                        {{$sessao->dia}}, {{$sessao->horario}}
                        <div
                            class="flex w-full gap-4 justify-evenly">
                            <a class="px-2 py-1 font-bold bg-blue-500 rounded-lg text-zinc-50"
                                href="{{ route('sessoes.edit', ['sessao' => $sessao->id]) }}">Editar</a>
                            <a class="px-2 py-1 font-bold bg-indigo-700 rounded-lg text-zinc-50"
                                href="{{ route('sessoes.show', ['sessao' => $sessao->id]) }}">Visualizar</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection
