<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    public readonly Filme $filme;
    public function __construct()
    {
        $this->filme = new Filme();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filmes = $this->filme->all();
        return view('filmes', ['filmes' => $filmes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('filme_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->filme->create([
            'capa' => $request->input('capa'),
            'titulo' => $request->input('titulo'),
            'sinopse' => $request->input('sinopse'),
            'data_lancamento' => $request->input('data_lancamento'),
            'faixa_etaria' => $request->input('faixa_etaria'),
        ]);

        if ($created) {
            return redirect()->back()->with('message', 'Adicionado com sucesso');
        }

        return redirect()->back()->with('message', 'Error ao adicionar');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filme $filme)
    {
        return view('filme_edit', ['filme' => $filme]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->filme->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            return redirect()->back()->with('message', 'Editado com sucesso');
        }

        return redirect()->back()->with('message', 'Error ao editar');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->filme->where('id', $id)->delete();

        return redirect()->route('filmes.index');
    }
}