@extends('login.layout')
@section('titulo', 'Login - SPGWeb')
@section('conteudo')

@if ($mensagem = Session::get('erro'))
    {{$mensagem}}
@endif
@if ($errors->any())
    @foreach ($errors->all() as $error)
         {{$error}} 
    @endforeach
    
@endif
<form action="{{route('login.auth')}}" method="POST">
    @csrf
    <fieldset class="container">
        <legend>Login</legend>
            Email: <input type="email" name="email">
            Senha: <input type="password" name="password">
            <button type="submit">Entrar</button>
    </fieldset>
</form>
@endsection

