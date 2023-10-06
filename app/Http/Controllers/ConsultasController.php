<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Filme;

class ConsultasController extends Controller
{
    public function index()
    {
        $search = request('search');
        $filmes = Filme::all();

        return view('consultas.index', ['filmes' => $filmes, 'search' => $search]);
    }

    public function basic()
    {
        // Consulta simples usando somente o básico SELECT, FROM, WHERE

        $search = request('search');

        $filmes = DB::table('filmes')
            ->select('capa', 'id')
            ->where('faixa_etaria', '=', $search)
            ->get();

        return view('consultas.basic', ['filmes' => $filmes, 'search' => $search]);
    }
    public function like()
    {
        // Consulta usando LIKE

        $search = request('search');

        $filmes = DB::table('filmes')
            ->select('capa', 'id')
            ->where('titulo', 'like', '%' . $search . '%')
            ->get();

        return view('consultas.like', ['filmes' => $filmes, 'search' => $search]);
    }

    // public function union()
    // {
    //     // Consulta usando operadores de conjuntos

    //     $searchFilme = request('search-filme');
    //     $searchSala = request('search-sala');

    //     $filmes = DB::table('filmes')
    //         ->select('capa', 'id')
    //         ->where('titulo', '=', $searchFilme)
    //         ->get();

    //     $salas = DB::table('salas')
    //         ->select('capacidade')
    //         ->where('numero', '=', $searchSala)
    //         ->get();

    //     $resultado = $filmes->union($salas)->get();

    //     return view('consultas.union', ['union' => $resultado, 'searchFilme' => $searchFilme, 'searchSala' => $searchSala]);
    // }

    public function join()
    {
        // Consulta usando um JOIN

        $search = request('search');

        $sessoes = DB::table('sessoes')
            ->join('filmes', 'sessoes.filme_id', '=', 'filmes.id')
            ->where('sessoes.id', '=', $search)
            ->select('sessoes.horario', 'sessoes.dia', 'filmes.capa', 'filmes.id', 'filmes.titulo', 'filmes.faixa_etaria')
            ->get();

        return view('consultas.join', ['sessoes' => $sessoes, 'search' => $search]);

    }

    public function multipleJoin()
    {
        // Consulta usando mais de um JOIN

        $search = request('search');

        $sessoes = DB::table('sessoes')
            ->join('filmes', 'sessoes.filme_id', '=', 'filmes.id')
            ->join('salas', 'sessoes.sala_id', '=', 'salas.id')
            ->join('cinemas', 'salas.cinema_id', '=', 'cinemas.id')
            ->where('sessoes.id', '=', $search)
            ->select('sessoes.horario', 'sessoes.dia', 'filmes.capa', 'filmes.id', 'filmes.titulo', 'filmes.faixa_etaria', 'salas.numero', 'salas.capacidade', 'cinemas.nome')
            ->get();

        return view('consultas.multiple-join', ['sessoes' => $sessoes, 'search' => $search]);

    }
}
