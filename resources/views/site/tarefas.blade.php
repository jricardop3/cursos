@extends('site.layout2')
@section('titulo', 'Tarefas Page')
@push('style')
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endpush
@section('conteudo2')

            @foreach ($subTarefasMenu as $subTarefaMenu)        
                    
                
                    
                    
                        @if ($subTarefaMenu->id_tarefa == $aula->id)
                        <p>{{$subTarefaMenu->titulo}}</p>
                        <p>{{$subTarefaMenu->descricao}}</p>
                        <p>{{$subTarefaMenu->tarefa}}</p>
                        <p>{{$subTarefaMenu->conteudotarefa}}</p>
                            <img class="responsive-img container hoverable" src="{{$subTarefaMenu->video}}" width="1200">
                            <p>{{$subTarefaMenu->conteudovideo}}</p>
                            <img class="responsive-img container hoverable" src="{{$subTarefaMenu->imagem}}" width="1200">
                            <p>{{$subTarefaMenu->conteudoimagem}}</p>
                        <p>{{$subTarefaMenu->mensagem}}</p>                                                            
                        @endif
                    @endforeach
        </div>
        
      </div>
            

@endsection

@push('script')
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
@endpush
