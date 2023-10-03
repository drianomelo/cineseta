<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use App\Models\Sala;
use Illuminate\Http\Request;

class SalaController extends Controller
{
    public readonly Sala $sala;
    public function __construct()
    {
        $this->cinema = new Cinema();
        $this->sala = new Sala();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salas = $this->sala->all();
        return view('salas', ['salas' => $salas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cinemas = $this->cinema->all();
        return view('sala_create', ['cinemas' => $cinemas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->sala->create([
            'numero' => $request->input('numero'),
            'capacidade' => $request->input('capacidade'),
            'cinema_id' => $request->input('cinema_id'), //select?
        ]);

        if ($created) {
            return redirect()->back()->with('message', 'Adicionado com sucesso');
        }

        return redirect()->back()->with('message', 'Error ao adicionar');

    }

    /**
     * Display the specified resource.
     */
    public function show(Sala $sala)
    {
        $cinemas = $this->cinema->all();
        return view('sala_show', ['sala' => $sala, 'cinemas' => $cinemas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sala $sala)
    {
        $cinemas = $this->cinema->all();
        return view('sala_edit', ['sala' => $sala, 'cinemas' => $cinemas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->sala->where('id', $id)->update($request->except(['_token', '_method']));

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
        $this->sala->where('id', $id)->delete();

        return redirect()->route('salas.index');
    }
}
