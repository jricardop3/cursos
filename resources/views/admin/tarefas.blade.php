@extends('admin.layout')
@section('titulo', 'Tarefas')
@section('conteudo')
     

<div class="fixed-action-btn">
    <a  class="btn-floating btn-large bg-gradient-green modal-trigger" href="#createTarefa">
      <i class="large material-icons">add</i>
    </a>   
  </div>
@include('admin.tarefa.create')

    <div class="row container crud">
        @include('admin.includes.mensagens')
            <div class="row titulo ">              
              <h1 class="left">Tarefas</h1>
              <span class="right chip">{{$tarefas->count()}}</span>  
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
            <table class="striped" > 
                <thead>
                  <tr>
                    <th>Titulo da Aula</th>                     
                    <th>Titulo da Tarefa</th>
                  </tr>
                </thead>
        
                <tbody>
                  @foreach ($tarefas as $tarefa)
                    <tr>
                        @foreach ($aulas as $aula)
                          @if ($aula->id == $tarefa->id_aula)
                            <td>{{$aula->aula}}</td>
                          @endif
                        @endforeach  
                        <td>{{$tarefa->titulo}}</td>
                        @foreach ($subtarefas as $subtarefa)
                          @if ($subtarefa->id == $tarefa->id_sub_tarefa)
                            <td>{{$subtarefa->titulo}}</td>
                          @endif
                        @endforeach 
                         
                                        
                      
                        <td><a class="btn-floating  waves-effect waves-light orange"><i class="material-icons">mode_edit</i></a>
                            <a href="#delete-{{$tarefa->id}}" class="btn-floating modal-trigger waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
                            @include('admin.tarefa.delete')
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div> 
            <div class="container center">
                <h6>Todos os direitos reservador a Script Praia Grande Web</h6>
                {{$tarefas->links('site.custom.pagination')}}
              </div>               
    </div>
    
    @endsection
     