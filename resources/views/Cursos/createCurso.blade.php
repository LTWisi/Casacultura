<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/createCurso.css') }}">

    <title>Crear curso</title>
</head>

<body>
    <!--NavBar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="resources/artistas.png" alt="Logo" height="30px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Enseña</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Iniciar sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="resources/pngegg (1).png" height="30px" alt="Icono Usuario">
                    </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar Cursos" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 mr-4" type="submit">Buscar</button>
            </form>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar usuarios" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
    <!--/NavBar-->

    <!--Main-Carousel-->
    <main id="main">
        <div id="carousel" class="carousel slide carousel" data-ride="carousel" data-pause="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="resources/curso1.png" class="d-block w-100" alt="Maestro">
                </div>
                <div class="carousel-item">
                    <img src="resources/curso2.png" class="d-block w-100" alt="Programador">
                </div>
                <div class="carousel-item">
                    <img src="resources/curso3.png" class="d-block w-100" alt="Contador">
                </div>
                <div class="overlay">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 text-center text-md-left">
                                <h1>Ayuda a crear un mejor futuro</h1>
                                <p class="d-none d-md-block">Al transmitir tus conocimientos en esta plataforma, te desarrollas profesionalmente y ayudas a otros a desarrollarse.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--/Main-Carousel-->

    <!--Form-->
    <section id="crear-curso" class="mt-4 mb-4">
        <div class="container">
            <div class="row align-items-start">
                <div class="col text-center text-uppercase">
                    <small>Crear un</small>
                    <h2>curso</h2>
                </div>
            </div>
            <form>
                <div class="form-group row">
                    <label for="exampleInputEmail1">Nombre del curso</label>
                    <input type="text" class="form-control" id="nombreCurso">
                </div>
                <div class="form-group row">
                    <label for="costoCurso">Costo:</label>
                    <input type="number" class="form-control" id="costoCurso" step="0.1">
                </div>
                <div class="form-group row">
                    <label for="descripcionCurso">Descripcion:</label>
                    <textarea class="form-control" rows="4" cols="50" id="descripcionCurso"></textarea>
                </div>
                <div class="form-group row">
                    <label for="idioma">Idioma</label>
                    <input type="text" class="form-control" id="idiomaCurso">
                </div>
                <div class="form-group row">
                    <label for="aprendizajeCurso">Aprendizajes a desarrollar:</label>
                    <textarea class="form-control" rows="4" cols="50" id="aprendizajeCurso"></textarea>
                </div>
                <div class="form-group row">
                    <label for="requisitosCurso">Requisitos:</label>
                    <textarea class="form-control" rows="4" cols="50" id="requisitosCurso"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Crear curso</button>
            </form>
        </div>
    </section>
    <!--/Form-->

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
    <!--/Footer -->

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