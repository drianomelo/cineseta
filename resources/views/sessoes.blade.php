@extends('master')

@section('content')
    <div class="flex items-center justify-between px-10 pt-8">
        <a class="p-2 font-semibold bg-green-600 rounded-lg text-zinc-50" href="{{ route('sessoes.create') }}">Adicionar
            Sessão</a>
        {{-- <span class="text-xs font-bold text-red-600 w-36">Para deletar um filme clique em "visualizar"</span> --}}
    </div>
    <div class="flex flex-wrap justify-center gap-20 p-10">
        @foreach ($sessoes as $sessao)
            <div class="relative group">
                <div class="p-2 font-semibold bg-green-600 rounded-lg text-zinc-50" >Sessão {{$sessao}}
                {{-- <article class="w-[290px] relative group overflow-hidden rounded-xl">


                    <span
                        class="px-2 py-[2px] text-sm font-bold bg-green-500 rounded-md text-zinc-50 absolute top-2 right-8 opacity-0 group-hover:right-2 group-hover:opacity-100 transition-all duration-500">

                        {{ $sala->capacidade }}</span>
                    <div
                        class="absolute flex w-full transition-all duration-500 opacity-0 bottom-12 justify-evenly group-hover:bottom-6 group-hover:opacity-100">--}}
                        <a class="px-2 py-1 font-bold bg-blue-500 rounded-lg text-zinc-50"
                            href="{{ route('sessoes.edit', ['sessao' => $sessao->id]) }}">Editar</a>
                        <a class="px-2 py-1 font-bold bg-indigo-700 rounded-lg text-zinc-50"
                            href="{{ route('sessoes.show', ['sessao' => $sessao->id]) }}">Visualizar</a>
                    </div>
                    {{--</div>
                </article>
                <div
                    class="absolute flex flex-col items-center w-full p-2 top-[250px] -z-10 transition-all duration-500 group-hover:top-[380px]">

                </div> --}}
            </div>
        @endforeach
    </div>
@endsection
