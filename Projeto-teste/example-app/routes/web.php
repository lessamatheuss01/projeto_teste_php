<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Cliente;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'clientes', 'namespace' => 'App\Http\Controllers'], function(){
    Route::get('/create',['uses' => 'ClienteController@create', 'as' => 'clientes.create'] );
    Route::post('/',['uses' => 'ClienteController@store', 'as' => 'clientes.store'] );
});


Route::group(['prefix' => 'users', 'namespace' => 'App\Http\Controllers'], function(){
    Route::get('/create',['uses' => 'UserController@create', 'as' => 'users.create'] );
    Route::post('/',['uses' => 'UserController@store', 'as' => 'users.store'] );
});

Route::group(['prefix' => 'produtos', 'namespace' => 'App\Http\Controllers'], function(){
    Route::get('/create',['uses' => 'ProdutoController@create', 'as' => 'produtos.create'] );
    Route::post('/',['uses' => 'ProdutoController@store', 'as' => 'produtos.store'] );
});