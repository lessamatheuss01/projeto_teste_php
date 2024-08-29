<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $data = $request['user'];
        $user = new User();
        $user->fill($data);
        $user->save();

        return response()->json(['massage' => 'Usuario criado com sucesso', 'user' => $user], 201);
    }
}
