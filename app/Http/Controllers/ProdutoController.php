<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        return view('produtos.index');
    }
    
    public function mostraProduto(Request $req)
    {
        // Lógica para exibir um produto específico com base no ID
        echo $req->input('nome');
    }
}
