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

    public function agregacao()
    {
        // Consulta usando função de agregação

        $search = request('search');

        $count = '';

        switch ($search) {
            case 'filmes':
                $count = DB::table('filmes')->count();
                break;
            case 'salas':
                $count = DB::table('salas')->count();
                break;
            case 'sessoes':
                $count = DB::table('sessoes')->count();
                break;
            case 'cinemas':
                $count = DB::table('cinemas')->count();
                break;
        }

        return view('consultas.agregacao', ['count' => $count, 'search' => $search]);

    }

    public function groupBy()
    {
        // Consulta usando GROUP BY

        $search = request('search');

        $cinemas = DB::table('sessoes')
            ->join('salas', 'sessoes.sala_id', '=', 'salas.id')
            ->join('cinemas', 'salas.cinema_id', '=', 'cinemas.id')
            ->select('cinemas.nome', DB::raw('count(sessoes.id) as total_sessoes'))
            ->groupBy('cinemas.nome')
            ->get();


        return view('consultas.groupBy', ['cinemas' => $cinemas, 'search' => $search]);

    }

    public function groupByHaving()
    {
        // Consulta usando GROUP BY e HAVING

        $search = request('search');

        $cinemas = DB::table('sessoes')
            ->join('salas', 'sessoes.sala_id', '=', 'salas.id')
            ->join('cinemas', 'salas.cinema_id', '=', 'cinemas.id')
            ->select('cinemas.nome', DB::raw('count(sessoes.id) as total_sessoes'))
            ->groupBy('cinemas.nome')
            ->havingRaw('count(sessoes.id) > 1')
            ->get();


        return view('consultas.groupBy', ['cinemas' => $cinemas, 'search' => $search]);

    }

    public function in()
    {
        // Consulta usando operador IN

        $faixa_etaria = ['livre', '10', '12'];

        $filmes = DB::table('filmes')
            ->whereIn('faixa_etaria', $faixa_etaria)
            ->get();

        return view('consultas.in', ['filmes' => $filmes]);

    }

    public function exists()
    {
        // Consulta usando operador EXISTS

        $sessoesComFilmesAdultos = DB::table('sessoes')
            ->whereExists(function ($query) {
                $query->select(DB::raw(1))
                    ->from('filmes')
                    ->whereRaw('sessoes.filme_id = filmes.id')
                    ->where('filmes.faixa_etaria', '>=', 18);
            })
            ->get();


        return view('consultas.exists', ['sessoes' => $sessoesComFilmesAdultos]);

    }

    public function all()
    {
        // Consulta usando operador ALL

        $cinemas = DB::table('cinemas')
            ->where(function ($query) {
                $query->whereNotExists(function ($subquery) {
                    $subquery->select(DB::raw(1))
                        ->from('salas')
                        ->whereRaw('salas.cinema_id = cinemas.id')
                        ->where('salas.capacidade', '<=', 100);
                });
            })
            ->get();


        return view('consultas.all', ['cinemas' => $cinemas]);

    }


}
