<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;

class ClienteController extends Controller
{
    private $mensagem = "Cliente inclcuido com sucesso!";
    public function index()
    {
        $clientes = cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function cadCliente(Request $req)
    {
        //validar se o nome foi digitado.
        $dados = $req->validate(
[
            'nome' => 'required|min:3|max:40',
            'cpf' => 'required|min:11|max:14',
            'email' => 'nullable|email|max:255',
            'telefone' => 'nullable|string|max:20',

        ],
[
            'nome.required' => 'O campo nome é obrigatório',
            'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
            'cpf.required' => 'O campo CPF é obrigatório',
            'cpf.min' => 'O campo CPF deve ter no mínimo 11 caracteres',
            'cpf.max' => 'O campo CPF deve ter no máximo 14 caracteres',
            'email.email' => 'O campo email deve ser um email válido',
            'email.max' => 'O campo email deve ter no máximo 255 caracteres',
            'telefone.max' => 'O campo telefone deve ter no máximo 20 caracteres',

        ]
    );
        cliente::create($dados); // requer $fillable no Model
        return redirect()->route('clientes.tabela')->with('success', $this->mensagem);
    }

    public function edit($id) {
        $cliente = cliente::findOrFail($id);
        return view('clientes.alterar', compact('cliente'));
    }
    public function altCliente(Request $request, $id)
    {
        $clientes = cliente::findOrFail($id);
        $dados = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'nullable|string|max:20',
            'cpf' => 'nullable|string|max:20',
        ]);
        $clientes->update($dados);
        return redirect()->route('clientes.tabela', $clientes->id)
            ->with('success', 'Cadastro atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);
    
        if (!$cliente) {
            return redirect()
                ->back()
                ->with('error', 'Cliente não encontrado.');
        }
    
        $cliente->delete();
    
        return redirect()
            ->route('clientes.tabela') // ajuste para sua rota de listagem
            ->with('success', 'Cliente excluído com sucesso!');
    }
}
