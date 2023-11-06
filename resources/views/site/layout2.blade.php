<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    
    @stack('style')
</head>
<body>
    <nav class="green">
        <div class="nav-wrapper">
          <a href="{{route('site.home')}}" class="brand-logo left">Cursos</a>
          <ul class="right">
            
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Cursos<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="waves-effect waves-light btn green"><i class="material-icons left">login</i></a></li>
          </ul>
        </div>
      </nav>
    @yield('conteudo2')

@stack('script')
</body>
</html>