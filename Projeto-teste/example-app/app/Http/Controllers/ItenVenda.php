<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItenVenda extends Controller
{
    public function createItenVenda(Request $request){
        $request->validate([
            'qtd' => 'required|integer|max:10',
            'fk_pedido' => 'required|exists:pedidos,id',
            'fk_produto' => 'required|exists:produtos,id'
        ]);

        $itenvenda = ItenVenda::create([
            'qtd' => $request->qtd,
            'fk_pedido' => $request->fk_pedido,
            'fk_produto' => $request->fk_produto
        ]);

        return response()->json(['massage' => 'ItenVenda criado com sucesso', 'itenvenda' => $itenvenda], 201);
    }
}
