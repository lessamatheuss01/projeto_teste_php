<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function create(){
        return view('produto.create');
    }

    public function store(Request $request){
        $data = $request['produto'];
        $produto = new Produto();
        $produto->fill($data);
        $produto->save();


        return response()->json(['massage' => 'Produto criado com sucesso', 'produto' => $produto], 201);
    }
}
