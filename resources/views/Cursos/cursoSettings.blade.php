<!doctype html>
<html lang="en">

<head>
    <!--   meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/cursoSettings.css') }}">
    <title>Ajustes de curso</title>
</head>

<body>

    <!--NavBar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('usuario.index') }}">
            <img src="{{ asset('imagenes/artistas.png') }}" alt="Logo" height="30px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('usuario.index') }}">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('curso.index') }}">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('curso.create') }}">Enseña</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('usuario.create') }}">Iniciar sesión</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--/NavBar-->

    <div class="hero">
        @if ( $errors->any() )
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="form-box">
            @if ( @isset($curso) )
                <form action="{{ route('curso.update', [$curso]) }}" method="POST">
                @method('PATCH')

                <div class="row align-items-center">
                    <div class="col text-center text-uppercase">
                        <small>Ajustes de curso:</small>
                        <h2>{{ $curso->nombre }}</h2>
                    </div>
                </div>
            @else
                <form action="{{ route('curso.store') }}" method="POST">

                <div class="row align-items-center">
                    <div class="col text-center text-uppercase">
                        <small>Crear nuevo</small>
                        <h2>{{ "Curso" }}</h2>
                    </div>
                </div>
            @endif

                @csrf

                <div class="form-group row">
                    <label for="nombre" class="col-sm-2 col-form-label">* Nombre: </label>
                    <div class="col-sm-10">
                        <input type="text" for="nombre" name="nombre" value="{{old('nombre') ?? $curso->nombre ?? ''}}" class="form-control" id="inputNombre">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fechaPublicacion" class="col-sm-2 col-form-label">* Fecha:</label>
                    <div class="col-sm-10">
                        <input type="date" for="fechaPublicacion" name="fechaPublicacion" value="{{old('fechaPublicacion') ?? $curso->fechaPublicacion ?? ''}}" class="form-control" id="fechaCurso"  >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="costo" class="col-sm-2 col-form-label">Costo:</label>
                    <div class="col-sm-10">
                        <input type="number" for="costo" name="costo" value="{{old('costo') ?? $curso->costo ?? ''}}" class="form-control" id="costoCurso" step=".1">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="descripcion" class="col-sm-2 col-form-label">Descripción:</label>
                    <div class="col-sm-10">
                        <textarea for="descripcion" name="descripcion" class="form-control" rows="5" cols="50">{{old('descripcion') ?? $curso->descripcion ?? ''}}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="idioma" class="col-sm-2 col-form-label">* Idioma:</label>
                    <div class="col-sm-10">
                        <input type="text" for="idioma" name="idioma" value="{{old('idioma') ?? $curso->idioma ?? ''}}" class="form-control" id="idiomaCurso"  >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="aprendizaje" class="col-sm-2 col-form-label">Aprendizaje:</label>
                    <div class="col-sm-10">
                        <textarea for="aprendizajes" name="aprendizajes" class="form-control" rows="5" cols="50">{{old('aprendizajes') ?? $curso->aprendizajes ?? ''}}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="requisitos" class="col-sm-2 col-form-label">Requisitos:</label>
                    <div class="col-sm-10">
                        <textarea for="requisitos" name="requisitos" class="form-control" rows="5" cols="50">{{old('requisitos') ?? $curso->requisitos ?? ''}}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 justify-content-center">
                        @if ( @isset($curso) )
                            <button type="submit" class="btn btn-info mb-4">Modificar</button>
                        @else
                            <button type="submit" class="btn btn-info">Crear curso</button>
                        @endif
                    </form>
                        @if ( @isset($curso) )
                            <form action="{{ route('curso.destroy', [$curso]) }}" method="POST">
                                @method('DELETE')
                        @csrf
                                <button type="submit" class="btn btn-danger">Eliminar curso</button>
                            </form>
                        @endif
                    </div>
              </div>
        </div>

        <!-- Footer -->
        <footer id="footer" class="pb-4 pt-4">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 col-lg">
                        <a href="">Preguntas frecuentes</a>
                    </div>
                    <div class="col-12 col-lg">
                        <a href="">Contáctanos</a>
                    </div>
                    <div class="col-12 col-lg">
                        <a href="">Prensa</a>
                    </div>
                    <div class="col-12 col-lg">
                        <a href="">Términos y concidiones</a>
                    </div>
                    <div class="col-12 col-lg">
                        <a href="">Privacidad</a>
                    </div>
                    <div class="col-12 col-lg">
                        <a href="">Estudiantes</a>
                    </div>
                </div>
            </div>
        </footer>
        <!--/Footer-->
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
