<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carros;

class CarrosController extends Controller
{
    public function index()
    {
        $carros = carros::all();
        //var_dump($carros);
        
        return view('carros.index', compact('carros'));
    }

    public function salvarCarro(Request $request)
    {
        $carros = new carros();
        $carros->marca = $request->input('marca');
        $carros->modelo = $request->input('modelo');
        $carros->ano_fabricacao = $request->input('ano_fabricacao');
        $carros->cor = $request->input('cor');
        $carros->save();

        return redirect()->route('carros.index');
    }

    public function buscarCarro($id)
    {
        $carro = carros::find($id);
        if (!$carro) {
            return redirect()->route('carros.index')->with('error', 'Carro não encontrado.');
        }
        return view('carros.alterar', compact('carro'));
    }

    public function alterarCarro(Request $request)
    {
        $carro = carros::find($request->input('id'));
        $carro->update($request->all());
        /*
        $carro->marca = $request->input('marca');
        $carro->modelo = $request->input('modelo');
        $carro->ano_fabricacao = $request->input('ano_fabricacao');
        $carro->cor = $request->input('cor');
        $carro->save();
        */
        return redirect()->route('carros.index');
    }
}
