<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pedido extends Controller
{
    public function createPedido(Request $request){
        $request->validate([
            'valorTotal' => 'required|double|min:20',
            'fk_cliente' => 'required|exists:clientes,id'
        ]);

        $pedido = Pedido::create([
            'valorTotal' => $request->valorTotal,
            'fk_cliente' => $request->fk_cliente,
        ]);

        return response()->json(['massage' => 'Pedido criado com sucesso', 'pedido' => $pedido], 201);
    }
}
