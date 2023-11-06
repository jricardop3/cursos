<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('titulo')</title>   
  @stack('style')
</head>
<body class="grey lighten-4">
  <main>
    <!-- DESKTOP--> 
    <ul id="dropdown2" class="dropdown-content">
      @foreach ($cursosMenu as $cursoMenu)
        <li><a href="{{route('site.curso', $cursoMenu->id)}}">{{$cursoMenu->curso}}</a></li>
      @endforeach
    </ul><!-- DESKTOP acesso ao Dashboard--> 
    <ul id="dropdown3" class="dropdown-content">
      <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
      <li><a href="{{route('login.logout')}}">Logout</a></li>
    </ul> 
    <nav  class="green hide-on-med-and-down">
      <div class="nav-wrapper">
        <a href="{{route('site.home')}}" class="brand-logo left">Script Praia Grande Web</a>
        <ul class="right">            
          <!-- Dropdown Trigger DESKTOP -->
          @auth <!-- Logado -->
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Cursos<i class="material-icons right">arrow_drop_down</i></a></li>   
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown3">{{auth()->user()->name}}<i class="material-icons right">arrow_drop_down</i></a></li> 
          @else  
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Cursos<i class="material-icons right">arrow_drop_down</i></a></li>   
            <li><a href="{{route('login.form')}}">Logar<i class="material-icons right">login</i></a></li>
          @endauth
        </ul>
      </div>
    </nav>  
        <!-- MOBILE -->  
    <ul id="dropdown1" class="dropdown-content">
      @foreach ($cursosMenu as $cursoMenu)
        <li><a href="{{route('site.curso', $cursoMenu->id)}}">{{$cursoMenu->curso}}</a></li>
      @endforeach
    </ul><!-- MOBILE acesso ao Dashboard--> 
    <ul id="dropdown4" class="dropdown-content">
      <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
      <li><a href="{{route('login.logout')}}">Logout</a></li>
    </ul>   
    <nav  class="green hide-on-med-and-up show-on-medium">
      <div class="nav-wrapper">
        <a href="{{route('site.home')}}" class="brand-logo left">SPGWeb</a>
        <ul class="right">            
          <!-- Dropdown Trigger MOBILE -->  
          @auth <!-- Logado -->
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Cursos<i class="material-icons right">arrow_drop_down</i></a></li>  
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown4">{{auth()->user()->name}}<i class="material-icons right">arrow_drop_down</i></a></li>
          @else <!-- Deslogado -->
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Cursos<i class="material-icons right">arrow_drop_down</i></a></li>  
            <li><a href="{{route('login.form')}}">Logar<i class="material-icons right">login</i></a></li>
          @endauth
        </ul>
      </div>
    </nav>  
  @yield('conteudo')
  </main>
@stack('footer')
@stack('script')
<script>
  /* Dropdown */
var elemDrop = document.querySelectorAll('.dropdown-trigger');
var instanceDrop = M.Dropdown.init(elemDrop, {
    coverTrigger: false,
    constrainWidth: false
});
</script>
</body>
</html>