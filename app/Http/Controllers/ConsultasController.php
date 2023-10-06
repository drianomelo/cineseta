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

        return view('consultas', ['filmes' => $filmes, 'search' => $search]);
    }

    public function basic()
    {
        // Consulta simples usando somente o básico SELECT, FROM, WHERE

        $search = request('search');

        $filmes = DB::table('filmes')
            ->select('capa', 'id')
            ->where('titulo', '=', $search)
            ->get();

        return view('consultas', ['filmes' => $filmes, 'search' => $search]);
    }
    public function like()
    {
        // Consulta usando LIKE

        $search = request('search');

        $filmes = DB::table('filmes')
            ->select('capa', 'id')
            ->where('titulo', 'like', '%' . $search . '%')
            ->get();

        return view('consultas', ['filmes' => $filmes, 'search' => $search]);
    }
}