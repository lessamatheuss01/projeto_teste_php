@extends('layouts.main')


@section('content')


<form id="form_clientes" action="/clientes" method="POST" >
    @csrf
    <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="cliente[nome]" required>
        </div>

        <div>
            <label for="number">CPF:</label>
            <input type="number" id="number" name="cliente[cpf]" required>
        </div>
    </div>
    <button type="submit">Cadastrar</button>
</form>
@endsection