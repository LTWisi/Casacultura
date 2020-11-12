<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Cursos SW</title>
</head>

<body>

    @include('Layout.menu');


    <!--Main-Carousel-->
    <main id="main">
        <div id="carousel" class="carousel slide carousel" data-ride="carousel" data-pause="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('imagenes/1.png')}}" class="d-block w-100" alt="Family">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('imagenes/2.png')}}" class="d-block w-100" alt="Students">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('imagenes/3.png')}}" class="d-block w-100" alt="Programmer">
                </div>
                <div class="overlay">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 text-center text-md-left">
                                <h1>Desarrolla tu potencial</h1>
                                <p class="d-none d-md-block">Aprende las habilidades del futuro el día de hoy. El conocimiento no tiene límites. ¡Inscríbete ya!</p>
                                <a href="#" class="btn btn-outline-light">Quiero enseñar</a>
                                <button type="button" class="btn btn-cursos">Aprender</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--/Main-Carousel-->

    <!-- Contenido Usuarios y Cursos -->
    <section id="teachers">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center">
                    <table align="center" border="5" style="border-collapse: separate; border-spacing: 10px 5px;">
                        <small>Unete a uno de nuestros</small>
                        <h2>Cursos</h2>
                        <tr>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            <th>Costo</th>
                            <th>Descripción</th>
                            <th>Idioma</th>
                            <th>Aprendizajes</th>
                            <th>Requisitos</th>
                        </tr>
                        @foreach ($cursos as $curso)
                            <tr>
                                <td> <a href="{{ route('curso.show', [$curso->id]) }}"> {{$curso->nombre}} </a> </td>
                                <td>{{$curso->fechaPublicacion}}</td>
                                <td>{{$curso->costo}}</td>
                                <td>{{$curso->descripcion}}</td>
                                <td>{{$curso->idioma}}</td>
                                <td>{{$curso->aprendizajes}}</td>
                                <td>{{$curso->requisitos}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
        </div>
    </section>

    <!-- /Contenido Cursos -->

    <!--Fundadores-->
    <section id="teachers" class="mt-4 mb-4">
        <div class="container">
            <div class="row align-items-start">
                <div class="col text-center text-uppercase">
                    <small>Conoce a los</small>
                    <h2>Fundadores</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4 col-sm-12 col-md-6 text-center">
                    <div class="card">
                        <img src="{{asset('imagenes/avatar.jpg')}}" class="card-img-top" alt="Foto Sergio">
                        <div class="card-body">
                            <h5 class="card-title">Sergio Peña</h5>
                            <p class="card-text">Me gusta aplicar la tecnología de una forma innovadora para resolver problemas de impacto.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-sm-12 col-md-6 text-center">
                    <div class="card">
                        <img src="{{asset('imagenes/avatar.jpg')}}" class="card-img-top" alt="Foto Luis">
                        <div class="card-body">
                            <h5 class="card-title">Luis Torres</h5>
                            <p class="card-text">Es importante para mí emprender soluciones y mejoras mediante el uso de la tecnología.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Fundadores-->

    @include('Layout.footer');

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
