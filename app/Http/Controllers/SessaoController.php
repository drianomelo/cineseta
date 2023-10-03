<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use App\Models\Sala;
use App\Models\Sessao;
use Illuminate\Http\Request;

class SessaoController extends Controller
{
    public readonly Sessao $sessao;
    public function __construct()
    {
        $this->filme = new Filme();
        $this->sala = new Sala();
        $this->sessao = new Sessao();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sessoes = $this->sessao->all();
        return view('sessoes', ['sessoes' => $sessoes]); //todas as sessoes?
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()//create(id, tipo: filme ou sala)
    {
        /*
        if ($tipo = filme)
            $salas = $this->sala->all();
            return view('sessao_create', ['filmes' => $filmes]);
        else
            $filmes = $this->filme->all();
            return view('sessao_create', ['salas' => $salas]);
        */
        return view('sessao_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->sessao->create([
            'horario' => $request->input('horario'),
            'dia' => $request->input('dia'),
            'filme_id' => $request->input('filme_id'), //select?
            'sala_id' => $request->input('sala_id'), //select?
        ]);

        if ($created) {
            return redirect()->back()->with('message', 'Adicionado com sucesso');
        }

        return redirect()->back()->with('message', 'Error ao adicionar');

    }

    /**
     * Display the specified resource.
     */
    public function show(Sessao $sessao)
    {
        // $sessao = $this->sessao->all();
        $filmes = this->filme->all();
        $salas = this->sala->all();
        return view('sessao_show', ['sessao' => $sessao, 'filmes' => $filmes, 'salas' => $salas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sessao $sessao)
    {
        // $sessaos = $this->sessao->all();
        return view('sala_edit', ['sessao' => $sessao, 'filmes' => $filmes, 'salas' => $salas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->sessao->where('id', $id)->update($request->except(['_token', '_method']));

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
        $this->sessao->where('id', $id)->delete();

        return redirect()->route('sessoes.index');
    }
}
