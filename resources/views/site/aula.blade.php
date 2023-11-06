@extends('site.layout')
@section('titulo', 'SPGWEb - Tarefas')
@push('style')
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endpush
@section('conteudo')

<div>    
    <div class="row">
        <div class="col s12 m4 l2 hide-on-med-and-down">                       
            <h4 id="{{$aula->aula}}">{{$aula->aula}}</h4>
              <div>
                    @foreach ($tarefasMenu as $tarefaMenu)   
                        @if ($tarefaMenu->id_aula == $aula->id)
                        
                            <h6>{{$tarefaMenu->titulo}}</h6>
                                <div class="collection">
                                    @foreach ($subTarefasMenu as $subTarefaMenu) 
                                        @if ($tarefaMenu->id == $subTarefaMenu->id_tarefa)                                           
                                        <h6><a href="#{{$subTarefaMenu->titulo}}">{{$subTarefaMenu->titulo}}</a></h6>                                            
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
                    <h5 id="{{$aula->aula}}">{{$tarefaMenu->titulo}}</h5>
                            <div class="collection">
                                @foreach ($subTarefasMenu as $subTarefaMenu) 
                                    @if ($tarefaMenu->id == $subTarefaMenu->id_tarefa)                                          
                                        <a href="#{{$subTarefaMenu->titulo}}">{{$subTarefaMenu->titulo}}</a>                                          
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
                        
                            @if ($subTarefaMenu->id_tarefa == $tarefaMenu->id)
                            <div id="{{$subTarefaMenu->titulo}}">
                            <p>{{$subTarefaMenu->titulo}}</p>
                            <p>{{$subTarefaMenu->descricao}}</p>
                            <p>{{$subTarefaMenu->tarefa}}</p>
                            <p>{{$subTarefaMenu->conteudotarefa}}</p>
                            <video class="responsive-video" controls>
                                <source  src="{{ url("storage/{$subTarefaMenu->video}") }}" type="video/mp4">>
                            </video>
                                <p>{{$subTarefaMenu->conteudovideo}}</p>
                                <img class="responsive-img" src="{{ url("storage/{$subTarefaMenu->imagem}") }}">
                                <p>{{$subTarefaMenu->conteudoimagem}}</p>
                            <p>{{$subTarefaMenu->mensagem}}</p>
                            <a href="#{{$aula->aula}}">inicio</a>                               
                            </div>                             
                            @endif
                    @endforeach 
                @endif    
            @endforeach                                    
        </div>        
    </div>            
@endsection

@push('footer')
<footer class="page-footer green center">
  
<div class="col l6 s12">
  <h6>Todos os direitos reservador a Script Praia Grande Web</h6>
</div>
</footer>
@stack('script')
@endpush


@push('script')
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
@endpush