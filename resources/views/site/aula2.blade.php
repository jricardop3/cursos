@extends('site.layout')
@section('titulo', 'Tarefas Page')
@push('style')
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endpush
@section('conteudo')

<div>    
    <div class="row">
        <div class="col s12 m4 l2 hide-on-med-and-down">                       
            <h3 class="header">{{$aula->aula}}</h3>
              <div>
                    @foreach ($tarefasMenu as $tarefaMenu)   
                        @if ($tarefaMenu->id_aula == $aula->id)
                        
                            {{$tarefaMenu->titulo}}
                                <div class="collection">
                                    @foreach ($subTarefasMenu as $subTarefaMenu) 
                                        @if ($subTarefaMenu->id == $tarefaMenu->id_sub_tarefa)                                           
                                         <a href="#!">{{$subTarefaMenu->titulo}}</a>                                            
                                        @endif
                                    @endforeach
                                </div>
                        @endif
                    @endforeach
                </div>
        </div>
        <div class="s12 hide-on-med-and-up show-on-medium"> 
            <div>
                @foreach ($tarefasMenu as $tarefaMenu)   
                    @if ($tarefaMenu->id_aula == $aula->id)                        
                        {{$tarefaMenu->titulo}}
                            <div class="collection">
                                @foreach ($subTarefasMenu as $subTarefaMenu) 
                                    @if ($subTarefaMenu->id == $tarefaMenu->id_sub_tarefa)                                            
                                        <a href="#!">{{$subTarefaMenu->titulo}}</a>                                          
                                    @endif
                                @endforeach
                            </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="col s12 m12 l10">
            @foreach ($tarefasMenu as $tarefaMenu)   
                @if ($tarefaMenu->id_aula == $aula->id)
                    @foreach ($subTarefasMenu as $subTarefaMenu)
                        
                            @if ($subTarefaMenu->id == $tarefaMenu->id_sub_tarefa)
                            <p>{{$subTarefaMenu->titulo}}</p>
                            <p>{{$subTarefaMenu->descricao}}</p>
                            <p>{{$subTarefaMenu->tarefa}}</p>
                            <p>{{$subTarefaMenu->conteudotarefa}}</p>
                                <img class="responsive-img container hoverable" src="{{$subTarefaMenu->video}}" width="1200">
                                <p>{{$subTarefaMenu->conteudovideo}}</p>
                                <img class="responsive-img container hoverable" src="{{$subTarefaMenu->imagem}}" width="1200">
                                <p>{{$subTarefaMenu->conteudoimagem}}</p>
                            <p>{{$subTarefaMenu->mensagem}}</p>
                            <hr>                                                            
                            @endif
                    @endforeach 
                @endif    
            @endforeach                                    
        </div>        
    </div>            
@endsection

@push('script')
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
@endpush
