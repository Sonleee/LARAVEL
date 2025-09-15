<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    private $mensagem = "Cliente inclcuido com sucesso!";
    public function index()
    {
        return view('clientes.index');
    }

    public function recebeDados(Request $req)
    {
        //validar se o nome foi digitado.
        $req->validate(
[
            'nome' => 'required|min:3|max:40',
            'cpf' => 'required|min:11|max:14'
        ],
[
            'nome.required' => 'O campo nome é obrigatório',
            'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
            'cpf.required' => 'O campo CPF é obrigatório',
            'cpf.min' => 'O campo CPF deve ter no mínimo 11 caracteres',
            'cpf.max' => 'O campo CPF deve ter no máximo 14 caracteres'
        ]
    );

        //inputs do formulário
        echo $req->input('nome');
        echo "<br>";
        //echo "Dados recebidos com sucesso";

        return redirect()->route('cliente.novo')->with('success', $this->mensagem);
    }
}
