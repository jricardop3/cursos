@extends('admin.layout')
@section('titulo', 'Aulas')
@section('conteudo')
    

<div class="fixed-action-btn">
    <a  class="btn-floating btn-large bg-gradient-green modal-trigger" href="#createAula">
      <i class="large material-icons">add</i>
    </a>   
  </div>
@include('admin.aula.create')


    <div class="row container crud">
      @include('admin.includes.mensagens')
            <div class="row titulo ">              
              <h1 class="left">Aulas</h1>
              <span class="right chip">{{$aulas->count()}}</span>  
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
                    <th>Aula</th>
                    <th>Descrição</th>                     
                    <th>Curso</th>
                    <th>Data de Criação</th>
                    <th>Ultima Atualização</th>
                    <th></th>
                  </tr>
                </thead>
        
                <tbody>
                  @foreach ($aulas as $aula)
                    <tr>
                      <td><img src="{{ url("storage/{$aula->imagem}") }}" class="circle "></td>
                      <td>{{$aula->aula}}</td>
                      <td>{{$aula->descricao}}</td>
                      @foreach ($cursos as $curso)
                        @if ($aula->id_curso == $curso->id)
                          <td>{{$curso->curso}}</td>
                        @endif                    
                      @endforeach                    
                      <td>{{$aula->created_at->format('d/m/Y/')}}</td>
                      <td>{{$aula->updated_at->format('d/m/Y')}}</td>                      
                      <td><a class="btn-floating  waves-effect waves-light orange"><i class="material-icons">mode_edit</i></a>
                        <a href="#delete-{{$aula->id}}" class="btn-floating modal-trigger waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
                        @include('admin.aula.delete')
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div> 
            <div class="container center">
                <h6>Todos os direitos reservador a Script Praia Grande Web</h6>
                {{$aulas->links('site.custom.pagination')}}
              </div>               
    </div>
    
    @endsection
     