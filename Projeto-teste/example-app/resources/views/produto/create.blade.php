@extends('layouts.main')


@section('content')


<form id="form_produtos" action="/produtos" method="POST" >
    @csrf
    <div>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="produto[name]" required>
        </div>

        <div>
            <label for="valor">Valor:</label>
            <input type="valor" id="double" name="produto[valor]" required>
        </div>

    </div>
    <button type="submit">Cadastrar</button>
</form>
@endsection