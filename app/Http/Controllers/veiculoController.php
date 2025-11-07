<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;

class VeiculoController extends Controller
{
    /**
     * Exibe a lista de veículos cadastrados
     */
    public function index()
    {
        $veiculos = Veiculo::all();
        return view('veiculos.index', compact('veiculos'));
    }

    /**
     * Mostra o formulário de cadastro de um novo veículo
     */
    public function create()
    {
        return view('veiculos.create');
    }

    /**
     * Salva um novo veículo no banco de dados
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'modelo' => 'required|string|max:255',
            'cor' => 'nullable|string|max:100',
            'ano' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'placa' => 'required|string|max:10|unique:veiculos,placa',
        ]);

        Veiculo::create([
            'modelo' => $request->modelo,
            'cor' => $request->cor,
            'ano' => $request->ano,
            'placa' => strtoupper($request->placa),
        ]);

        return redirect()->route('veiculos.index')->with('success', 'Veículo cadastrado com sucesso!');
        dd($request->all());
    }
    

    /**
     * Mostra o formulário de edição de um veículo
     */
    public function edit($id)
    {
        $veiculo = Veiculo::findOrFail($id);
        return view('veiculos.edit', compact('veiculo'));
    }

    /**
     * Atualiza as informações de um veículo
     */
    public function update(Request $request, $id)
    {
        $veiculo = Veiculo::findOrFail($id);

        $request->validate([
            'modelo' => 'required|string|max:255',
            'cor' => 'nullable|string|max:100',
            'ano' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'placa' => 'required|string|max:10|unique:veiculos,placa,' . $veiculo->id,
        ]);

        $veiculo->update([
            'modelo' => $request->modelo,
            'cor' => $request->cor,
            'ano' => $request->ano,
            'placa' => strtoupper($request->placa),
        ]);

        return redirect()->route('veiculos.index')->with('success', 'Veículo atualizado com sucesso!');
    }

    /**
     * Remove um veículo do banco de dados
     */
    public function destroy($id)
    {
        $veiculo = Veiculo::findOrFail($id);
        $veiculo->delete();

        return redirect()->route('veiculos.index')->with('success', 'Veículo removido com sucesso!');
    }
}
