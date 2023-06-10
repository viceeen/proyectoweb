<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-custom.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    @yield('hojas-estilo')
    <title>Home</title>
</head>

<body>
    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-lg  bg-white text-uppercase">
            <div class="container-fluid ">
                <a class="navbar-brand" href="{{route('home.index')}}"><img src="{{ asset('images/logo.jpeg')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <div class="p-3">
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle  border-bottom border-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Alumno
                                    </a>
                                <ul class="dropdown-menu">
                                    <li><p class="text-dark"><a class="dropdown-item " href="{{route('estudiante.propuesta')}}">Ver Propuesta</a></p></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="{{route('home.index')}}">Crear Propuesta</a></li>
                                </ul>
                            </li>
                        </div>
                        <div class="p-3">
                            
                            <li class="nav-item md-3">
                                <a class="nav-link  border-bottom border-dark" href="{{route('profesor.index')}}">Profesor</a>
                            </li>
                        </div>
                        
                        <div class="p-3">
                            <li class="nav-item">
                                <a class="nav-link  border-bottom border-dark" href="{{route('administrador.index')}}">Administrador</a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    



    <div class="container-fluid">
        @yield('contenido-principal')
    </div>
    
    @yield('scripts-referencias')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    @yield('scripts-manual')

</body>

</html>