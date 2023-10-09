@extends('master')

@section('content')
    <div class="flex flex-col items-center justify-center gap-4 p-4">
        <a class="absolute p-2 font-semibold bg-blue-600 rounded-lg left-8 top-4 text-zinc-50"
            href="{{ route('home') }}">Voltar</a>
        <a class="w-[500px] p-2 text-center font-semibold transition-all duration-500 bg-green-900 rounded-lg cursor-pointer text-zinc-200 hover:bg-green-600 hover:text-zinc-50"
            href="{{ route('consultas.basic') }}">Consulta simples usando somente o básico SELECT, FROM, WHERE.</a>
        <a class="w-[500px] p-2 text-center font-semibold transition-all duration-500 bg-green-900 rounded-lg cursor-pointer text-zinc-200 hover:bg-green-600 hover:text-zinc-50"
            href="{{ route('consultas.like') }}">Consulta usando LIKE</a>
        {{-- <a class="w-[500px] p-2 text-center font-semibold transition-all duration-500 bg-green-900 rounded-lg cursor-pointer text-zinc-200 hover:bg-green-600 hover:text-zinc-50"
            href="{{ route('consultas.union') }}">Consulta usando operadores de conjuntos</a> --}}
        <a class="w-[500px] p-2 text-center font-semibold transition-all duration-500 bg-green-900 rounded-lg cursor-pointer text-zinc-200 hover:bg-green-600 hover:text-zinc-50"
            href="{{ route('consultas.join') }}">Consulta usando um JOIN
        </a>
        <a class="w-[500px] p-2 text-center font-semibold transition-all duration-500 bg-green-900 rounded-lg cursor-pointer text-zinc-200 hover:bg-green-600 hover:text-zinc-50"
            href="{{ route('consultas.multiple-join') }}">Consulta usando mais de um JOIN
        </a>
        <a class="w-[500px] p-2 text-center font-semibold transition-all duration-500 bg-green-900 rounded-lg cursor-pointer text-zinc-200 hover:bg-green-600 hover:text-zinc-50"
            href="{{ route('consultas.agregacao') }}">Consulta usando função de agregação
        </a>
        <a class="w-[500px] p-2 text-center font-semibold transition-all duration-500 bg-green-900 rounded-lg cursor-pointer text-zinc-200 hover:bg-green-600 hover:text-zinc-50"
            href="{{ route('consultas.group-by') }}">Consulta usando GROUP BY
        </a>
        <a class="w-[500px] p-2 text-center font-semibold transition-all duration-500 bg-green-900 rounded-lg cursor-pointer text-zinc-200 hover:bg-green-600 hover:text-zinc-50"
            href="{{ route('consultas.group-by-having') }}">Consulta usando GROUP BY e HAVING
        </a>
        <a class="w-[500px] p-2 text-center font-semibold transition-all duration-500 bg-green-900 rounded-lg cursor-pointer text-zinc-200 hover:bg-green-600 hover:text-zinc-50"
            href="{{ route('consultas.in') }}">Consulta usando operador IN
        </a>
        <a class="w-[500px] p-2 text-center font-semibold transition-all duration-500 bg-green-900 rounded-lg cursor-pointer text-zinc-200 hover:bg-green-600 hover:text-zinc-50"
            href="{{ route('consultas.exists') }}">Consulta usando operador Exists
        </a>
        <a class="w-[500px] p-2 text-center font-semibold transition-all duration-500 bg-green-900 rounded-lg cursor-pointer text-zinc-200 hover:bg-green-600 hover:text-zinc-50"
            href="{{ route('consultas.all') }}">Consulta usando operador ALL
        </a>
    </div>
@endsection
