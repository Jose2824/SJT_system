<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    /**
     * Listar clientes
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Mostrar formulário de criação
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Salvar no banco
     */
    public function store(Request $request)
    {
        // VALIDATE
        $request->validate([
            'razaoSocial' => 'required|string|max:255',
            'nomeFantasia' => 'nullable|string|max:255',
            'cnpj' => 'required|string|max:255|unique:clientes,cnpj',
            'inscricao_estadual' => 'nullable|string|max:255',

            'telefone' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',

            'rua' => 'required|string|max:255',
            'numero' => 'required|string|max:255',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:2',
            'cep' => 'required|string|max:15',
        ]);

        Cliente::create($request->all());

        return redirect()->route('clientes.index')->with('success', 'Cliente cadastrado com sucesso!');
    }

    /**
     * Mostrar formulário de edição
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Atualizar cliente
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        // VALIDATE (cnpj precisa ignorar o do próprio cliente)
        $request->validate([
            'razaoSocial' => 'required|string|max:255',
            'nomeFantasia' => 'nullable|string|max:255',
            'cnpj' => 'required|string|max:255|unique:clientes,cnpj,' . $cliente->id,
            'inscricao_estadual' => 'nullable|string|max:255',

            'telefone' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',

            'rua' => 'required|string|max:255',
            'numero' => 'required|string|max:255',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:2',
            'cep' => 'required|string|max:15',
        ]);

        $cliente->update($request->all());

        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso!');
    }

    /**
     * Deletar cliente
     */
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect()->route('clientes.index')->with('success', 'Cliente deletado!');
    }
}
