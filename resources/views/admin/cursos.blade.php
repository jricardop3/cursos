@extends('admin.layout')
@section('titulo', 'Cursos')
@section('conteudo')
    

<div class="fixed-action-btn">
    <a  class="btn-floating btn-large bg-gradient-green modal-trigger" href="#createCurso">
      <i class="large material-icons">add</i>
    </a>   
  </div>
  @include('admin.curso.create')
    <div class="row container crud">
      @include('admin.includes.mensagens')
            <div class="row titulo ">              
              <h1 class="left">Cursos</h1>
              <span class="right chip">{{$cursos->count()}}</span>  
            </div>

           <nav class="green">
            <div class="nav-wrapper">
              <form>
                <div class="input-field">
                  <input placeholder="Pesquisar..." id="search" type="search" required>
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
                </div>
              </form>
            </div>
          </nav>     

            <div class="card z-depth-4 registros" >
            <table class="striped ">
                <thead>
                  <tr>
                    <th></th>
                    <th>Curso</th>
                    <th>Criado por:</th>                    
                    <th>Data de Criação</th>
                    <th>Ultima Atualização</th> 
                    <th>Excluir</th>
                  </tr>
                </thead>
        
                <tbody>
                  @foreach ($cursos as $curso)
                    <tr>
                      <td><img src="{{ url("storage/{$curso->imagem}") }}" class="circle "></td>
                      <td>{{$curso->curso}}</td>  
                      @foreach ($users as $user)
                        @if ($user->id == $curso->id_user)
                          <td>{{$user->name}}</td>
                        @endif
                      @endforeach                  
                      <td>{{$curso->created_at->format('d/m/Y')}}</td>
                      <td>{{$curso->updated_at->format('d/m/Y')}}</td>
                      <td><a class="btn-floating  waves-effect waves-light orange"><i class="material-icons">mode_edit</i></a>
                        <a href="#delete-{{$curso->id}}" class="btn-floating modal-trigger waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
                        @include('admin.curso.delete')
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div> 
            <div class="container center">
              <h6>Todos os direitos reservador a Script Praia Grande Web</h6>
              {{$cursos->links('site.custom.pagination')}}
            </div>            
    </div>
   
    @endsection
     