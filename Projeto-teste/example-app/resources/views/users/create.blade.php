@extends('layouts.main')


@section('content')


<form id="form_users" action="/users" method="POST" >
    @csrf
    <div>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="user[name]" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="user[email]" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="user[password]" required>
        </div>
    </div>
    <button type="submit">Cadastrar</button>
</form>
@endsection