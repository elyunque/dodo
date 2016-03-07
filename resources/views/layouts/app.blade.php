<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Defensor del Pueblo
                </a>
            </div>

            @if (!Auth::guest())
                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                    <ul class="nav navbar-nav navbar-left">
                        <!-- Empleados Links -->                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Empleados <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">                            
                                <li><a href="{{ url('/employee') }}"><i class="fa fa-btn fa-users"></i>Listado de Empleados</a></li>
                                <li role="presentation" class="divider"></li>
                                <li><a href="{{ url('/password/reset') }}"><i class="fa fa-btn fa-chain-broken"></i>Editar Ausencias</a></li>
                                <li><a href="{{ url('/password/reset') }}"><i class="fa fa-btn fa-graduation-cap"></i>Editar Cursos</a></li>
                                <li><a href="{{ url('/department') }}"><i class="fa fa-btn fa-tasks"></i>Editar Departamentos</a></li>
                                <li><a href="{{ url('/password/reset') }}"><i class="fa fa-btn fa-briefcase"></i>Editar Estructura Organizacional</a></li>
                                <li><a href="{{ url('/password/reset') }}"><i class="fa fa-btn fa-clock-o"></i>Editar Tipos de Retrasos</a></li>
                                <li><a href="{{ url('/password/reset') }}"><i class="fa fa-btn fa-archive "></i>Editar Tipos de Sanciones</a></li>
                                <li><a href="{{ url('/password/reset') }}"><i class="fa fa-btn fa-file-word-o"></i>Editar Tipos de Contratos</a></li>
                                <li><a href="{{ url('/password/reset') }}"><i class="fa fa-btn fa-calendar-o "></i>Editar Días Festivos</a></li>
                            </ul>
                        </li>
                        <!-- Vacaciones Links -->                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Vacaciones <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/password/reset') }}"><i class="fa fa-btn fa-chain-broken"></i>Editar Mis</a></li>
                                <li role="presentation" class="divider"></li>
                                <li><a href="{{ url('/password/reset') }}"><i class="fa fa-btn fa-chain-broken"></i>Todos los Empleados</a></li>
                                <li role="presentation" class="divider"></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-briefcase"></i>Por Direcciones</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-briefcase"></i>Por Departamentos</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-briefcase"></i>Vencidas</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-briefcase"></i>Pendientes</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-briefcase"></i>Por Departamentos</a></li>

                            </ul>
                        </li>
                        <!-- Acciones de Personal Links -->                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Acciones <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/password/reset') }}"><i class="fa fa-btn fa-chain-broken"></i>Listar Acciones</a></li>
                                <li role="presentation" class="divider"></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-briefcase"></i>Por Direcciones</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-briefcase"></i>Por Departamentos</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-briefcase"></i>Vencidas</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-briefcase"></i>Pendientes</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-briefcase"></i>Por Departamentos</a></li>

                            </ul>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-btn fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">                            
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            @endif
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
