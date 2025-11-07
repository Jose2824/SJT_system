<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motorista;
class MotoristasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motoristas = Motorista::all();

        return view('motoristas.index', compact('motoristas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('motoristas.create');
    }

    // Salvar novo motorista
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome'     => 'required|string|max:255',
            'datanasc' => 'required|date',
            'cpf'      => 'required|string|max:20|unique:motoristas,cpf',
            'cnh'      => 'required|string|max:50',
            'numcont'  => 'required|string|max:20',
        ]);

        Motorista::create([
            'nome'     => $validated['nome'],
            'datanasc' => $validated['datanasc'],
            'cpf'      => $validated['cpf'],
            'cnh'      => $validated['cnh'],
            'numcont'  => $validated['numcont'],
        ]);

        return redirect()->route('motoristas.index')->with('success', 'Motorista criado com sucesso!');
    }

    // Mostrar detalhes de um motorista
    public function show(Motorista $motorista)
    {
    //
    }

    // Formulário para editar motorista
    public function edit(Motorista $motorista)
    {
        return view('motoristas.edit', compact('motorista'));
    }

    // Atualizar motorista
    public function update(Request $request, Motorista $motorista)
    {
        $validated = $request->validate([
            'nome'     => 'required|string|max:255',
            'datanasc' => 'required|date',
            'cpf'      => 'required|string|max:20|unique:motoristas,cpf,' . $motorista->id,
            'cnh'      => 'required|string|max:50',
            'numcont'  => 'required|string|max:20',
        ]);

        $motorista->update([
            'nome'     => $validated['nome'],
            'datanasc' => $validated['datanasc'],
            'cpf'      => $validated['cpf'],
            'cnh'      => $validated['cnh'],
            'numcont'  => $validated['numcont'],
        ]);

        return redirect()->route('motoristas.index')->with('success', 'Motorista atualizado com sucesso!');
    }

    // Deletar motorista
    public function destroy(Motorista $motorista)
    {
        $motorista->delete();

        return redirect()->route('motoristas.index')->with('success', 'Motorista removido!');
    }
}