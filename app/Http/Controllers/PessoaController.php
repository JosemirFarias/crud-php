<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pessoas = Pessoa::all();
        return view('pessoas.index', compact('pessoas')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pessoas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação simples
        $request->validate([
            'nome' => 'required|string|max:250',
            'email' => 'required|email|unique:pessoas,email',
            'telefone' => 'nullable',
        ]);

        // Salva no banco
        Pessoa::create($request->all());

        // Redireciona para o formulário ou para a lista (você escolhe)
        return redirect()->route('pessoas.index')->with('success', 'Pessoa cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pessoa = Pessoa::findOrFail($id);
        return view('pessoas.show', compact('pessoa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pessoa = Pessoa::findOrFail($id);
        return view('pessoas.edit', compact('pessoa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'telefone' => 'nullable',
        ]);

        $pessoa = Pessoa::findOrFail($id);
        $pessoa->update($request->all());

        return redirect()->route('pessoas.index')
            ->with('success', 'Cadastro Atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->delete();

        return redirect()->route('pessoas.index')
            ->with('success', 'Cadastro Excluído!');
    }
}
