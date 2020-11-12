<!--NavBar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('usuario.index') }}">
            <img src="{{asset('imagenes/artistas.png')}}" alt="Logo" height="30px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('usuario.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('curso.index') }}">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('curso.create') }}">Enseña</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Iniciar sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><!--Modificación pendiente-->
                        <img src="{{asset('imagenes/egg.png')}}" height="30px" alt="Icono Usuario">
                    </a>
                </li>
            </ul>
        </div>
    </nav>
<!--/NavBar-->
