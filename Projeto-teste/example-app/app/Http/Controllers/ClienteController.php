<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function create(){
        return view('clientes.create');
    }

    public function store(Request $request){
        $data = $request['cliente'];
        $cliente = new Cliente();
        $cliente->fill($data);
        $cliente->save();

        return response()->json(['massage' => 'Cliente criado com sucesso', 'cliente' => $cliente], 201);
    }
}
