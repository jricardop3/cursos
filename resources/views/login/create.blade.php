@extends('login.layout')
@section('titulo', 'criar usuarios - SPGWeb')
@section('conteudo')
@if ($mensagem = Session::get('erro'))
    {{$mensagem}}
@endif
@if ($errors->any())
    @foreach ($errors->all() as $error)
         {{$error}} 
    @endforeach
    
@endif

    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <fieldset class="container">
            <legend>Criar usuarios</legend>      
                    <label for="name">Nome</label>
                    <input  id="name" type="text" class="validate" name="name" class="form-control">
        
       
                    <label for="select">Tipo de Usuario</label>
                    <select name="tipo" id="select" class="browser-default" class="form-control">
                        <option value="admin">Administrador</option>
                        <option value="users">Usuario</option>
                    </select>
        
                    <label for="email">Email</label>
                    <input id="email" type="email" class="validate" class="form-control" name="email">
            
                    <label for="password">Senha</label>
                    <input id="password" type="password" class="validate" class="form-control" name="password">
            
                    <button type="submit">Cadastrar</button>
                

    </form>
    @endsection
