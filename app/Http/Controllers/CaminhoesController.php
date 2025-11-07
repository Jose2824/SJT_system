<?php

namespace App\Http\Controllers;

use App\Models\Caminhoes; 
use Illuminate\Http\Request;

class CaminhoesController extends Controller
{
    public function index()
    {
        $caminhoes = Caminhoes::all();
        return view('caminhoes.index', compact('caminhoes'));
    }

    public function create()
    {
        return view('caminhoes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'modelo' => 'required',
            'cor' => 'required',
            'cavalaria' => 'required',
            'ano' => 'required|digits:4',
            'renavam' => 'required|unique:caminhoes,renavam',
            'placa' => 'required|unique:caminhoes,placa',
        ]);

        Caminhoes::create($request->all());

        return redirect()->route('caminhoes.index')->with('success', 'Caminhão cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $caminhao = Caminhoes::findOrFail($id);
        return view('caminhoes.edit', compact('caminhao'));
    }

    public function update(Request $request, $id)
    {
        $caminhao = Caminhoes::findOrFail($id);

        $request->validate([
            'modelo' => 'required',
            'cor' => 'required',
            'cavalaria' => 'required',
            'ano' => 'required|digits:4',
            'renavam' => 'required|unique:caminhoes,renavam,' . $caminhao->id,
            'placa' => 'required|unique:caminhoes,placa,' . $caminhao->id,
        ]);

        $caminhao->update($request->all());

        return redirect()->route('caminhoes.index')->with('success', 'Caminhão atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $caminhao = Caminhoes::findOrFail($id);
        $caminhao->delete();

        return redirect()->route('caminhoes.index')->with('success', 'Caminhão excluído com sucesso!');
    }
}
