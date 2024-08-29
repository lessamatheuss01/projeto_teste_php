<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Parcelamento extends Controller
{
    public function createParcelamento(Request $request){
        $request->validate([
            'valor' => 'required|double|min:20',
            'parcela' => 'required|integer|min:1',
            'fk_pedido' => 'required|exists:pedidos,id'
            
        ]);

        $parcelamento = Parcelamento::create([
            'valor' => $request->valor,
            'parcela' => $request->parcela,
            'fk_pedido' => $request->fk_pedido,
        ]);

        return response()->json(['massage' => 'Parcelamento criado com sucesso', 'parcelamento' => $parcelamento], 201);
    }
}
