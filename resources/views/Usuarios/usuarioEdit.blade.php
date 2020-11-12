<!doctype html>
<!--Editar usuario-->
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/userSettings.css') }}">
    <title>Ajustes de usuario</title>
</head>

<body>

    @include('Layout.menu');

    <div class="hero">
        <div class="form-box">

            @if ( $errors->any() )
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('usuario.update', [$usuario]) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="row align-items-center">
                    <div class="col text-center text-uppercase">
                        <small>Ajustes de Usuario:</small>
                        <h2> {{ $usuario->nombrePila }} </h2>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputNombre" class="col-sm-2 col-form-label">Nombre:</label>
                    <div class="col-sm-10">
                        <input for="nombrePila" name="nombrePila" value="{{old('nombrePila') ?? $usuario->nombrePila ?? ''}}" type="text" class="form-control" id="inputNombre">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <input for="correo" name="correo" value="{{old('correo') ?? $usuario->correo ?? ''}}" type="email" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Contraseña:</label>
                    <div class="col-sm-10">
                        <input for="passwd" name="passwd" value="{{old('passwd') ?? $usuario->passwd ?? ''}}" type="password" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Edad:</label>
                    <div class="col-sm-10">
                        <input for="edad" name="edad" value="{{ old('edad') ?? $usuario->edad ?? '' }}" type="number" class="form-control" id="inputEdad">
                    </div>
                </div>
                <div class="mb-4">
                    <label class="col-sm-2 col-form-label">Ocupación:</label>
                    <select for="ocupacion" name="ocupacion" for="ocupacion">

                        <option value="{{ old('ocupacion') ?? $usuario->ocupacion ?? ''}}">{{$usuario->ocupacion}}</option>

                            @if ( "Estudiante" != $usuario->ocupacion )
                                <option value="Estudiante">Estudiante</option>
                            @endif

                            @if ( "Trabajador" != $usuario->ocupacion )
                                <option value="Trabajador">Trabajador</option>
                            @endif

                            @if ( "Profesor" != $usuario->ocupacion )
                                <option value="Profesor">Profesor</option>
                            @endif

                    </select>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 mb-4">
                        <button type="submit" class="btn btn-info">Modificar</button>
                        </form>

                        <form action="{{ route('usuario.destroy', [$usuario]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger mt-4" >Eliminar cuenta</button>
                        </form>
                    </div>
                </div>
        </div>

        @include('Layout.footer');

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
