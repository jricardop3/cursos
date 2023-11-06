@extends('site.layout')
@section('titulo', 'SPGWEB - Home')
@push('style')
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style> 
      body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
      }
      main {
      flex: 1 0 auto;
    }
    </style>
@endpush
@section('conteudo')

   
<div class="row">
  <div class="col s12">
      @foreach ($aulas as $aula)
          
          <div class="col s12 m6 l4 center-align">
            <p></p>
            <img class="responsive-img" width="600px" src="{{ url("storage/{$aula->imagem}") }}">
            <p><a href="{{route('site.aula', $aula->slug)}}">{{$aula->aula}}</a></p>
          </div>
      @endforeach
     
  </div>
  
</div>

            

@endsection
@push('footer')
<footer class="page-footer green center">
  
<div class="col l6 s12">
  <h6>Todos os direitos reservador a Script Praia Grande Web</h6>
  {{ $aulas->links('site.custom.pagination') }}
</div>
</footer>
@stack('script')
@endpush


@push('script')
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
@endpush

