@extends('admin.layout')
@section('titulo', 'Lições')
@section('conteudo')
    

<div class="fixed-action-btn">
    <a  class="btn-floating btn-large bg-gradient-green modal-trigger" href="#createSubTarefa"> 
      <i class="large material-icons">add</i>
    </a>   
  </div>
  @include('admin.subtarefa.create')
    <div class="row container crud ">
      @include('admin.includes.mensagens')
            <div class="row titulo">              
              <h1 class="left">Tarefas</h1>
              <span class="right chip">{{$subTarefas->count()}}</span>  
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

            <div class="card z-depth-5 registros" >
            <table class="striped">
                <thead>
                  <tr>
                    <th>Titulo da tarefa</th>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>Tarefa</th>
                    <th>Conteudo da tarefa</th>
                    <th>Video da tarefa</th>
                    <th>Conteudo do video</th>
                    <th>Imagem da tarefa</th>
                    <th>Conteudo da imagem</th>
                    <th>Mensagem</th>               
                    <th>Data de Criação</th>
                    <th>Ultima Atualização</th>
                    <th></th>
                  </tr>
                </thead>
        
                <tbody>
                  @foreach ($subTarefas as $subTarefa)
                    <tr>
                      @foreach ($tarefas as $tarefa)
                        @if ($tarefa->id == $subTarefa->id_tarefa)
                          <td>{{$tarefa->titulo}}</td>
                        @endif
                      @endforeach  
                      <td>{{$subTarefa->titulo}}</td>
                      <td>{{$subTarefa->descricao}}</td>
                      <td>{{$subTarefa->tarefa}}</td>
                      <td>{{$subTarefa->conteudotarefa}}</td>
                      <td><video src="{{ url("storage/{$subTarefa->video}") }}" width="100px"></td> 
                      <td>{{$subTarefa->conteudovideo}}</td>
                      <td><img src="{{ url("storage/{$subTarefa->imagem}") }}" class="circle "></td>    
                      <td>{{$subTarefa->conteudoimagem}}</td>    
                      <td>{{$subTarefa->mensagem}}</td>                    
                      <td>{{$subTarefa->created_at->format('d/m/Y')}}</td>
                      <td>{{$subTarefa->updated_at->format('d/m/Y')}}</td>
                      <td><a class="btn-floating  waves-effect waves-light orange"><i class="material-icons">mode_edit</i></a>
                        <a href="#delete-{{$subTarefa->id}}" class="btn-floating modal-trigger waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
                        @include('admin.subtarefa.delete')
                    </tr>
                  @endforeach
                </tbody>
              </table>
              
            </div> 

            <div class="container center">
              <h6>Todos os direitos reservador a Script Praia Grande Web</h6>
              {{ $subTarefas->links('site.custom.pagination') }}
            </div>     
    </div>
    
    @endsection
     