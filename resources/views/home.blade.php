@extends('master')


<div class="flex items-center justify-between px-10 pt-8">
<a class="p-2 font-semibold bg-green-600 rounded-lg text-zinc-50" href="{{ route('salas.index') }}">Gerenciar Salas</a>
</div>

<div class="flex items-center justify-between px-10 pt-8">
    <a class="p-2 font-semibold bg-green-600 rounded-lg text-zinc-50" href="{{ route('filmes.index') }}">Gerenciar Filmes</a>
</div>

<div class="flex items-center justify-between px-10 pt-8">
    {{-- <a class="p-2 font-semibold bg-green-600 rounded-lg text-zinc-50" href="{{ route('sessoes.index') }}">Gerenciar Sessões</a> --}}
</div>
