<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Relatorio;

class RelatorioController extends Controller
{
    public function index()
    {
        $relatorios = Relatorio::orderBy('data', 'desc')->get();
        return view('relatorios.index', compact('relatorios'));
    }

    public function create()
    {
        return view('relatorios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'veiculo'   => 'required|string|max:10',
            'descricao' => 'required|string|max:1000',
            'valor'     => 'required|numeric',
            'data'      => 'required|date',
        ]);

        Relatorio::create($request->all());

        return redirect()->route('relatorios.index')->with('success', 'Relatório cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $relatorio = Relatorio::findOrFail($id);
        return view('relatorios.edit', compact('relatorio'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'veiculo'   => 'required|string|max:10',
            'descricao' => 'required|string|max:1000',
            'valor'     => 'required|numeric',
            'data'      => 'required|date',
        ]);

        $relatorio = Relatorio::findOrFail($id);
        $relatorio->update($request->all());

        return redirect()->route('relatorios.index')->with('success', 'Relatório atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $relatorio = Relatorio::findOrFail($id);
        $relatorio->delete();

        return redirect()->route('relatorios.index')->with('success', 'Relatório excluído com sucesso!');
    }
}
