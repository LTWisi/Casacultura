<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Casa de la cultura</title>
        <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css">
    </head>

    <body>
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

                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Iniciar sesión</button>
                    <button type="button" class="toggle-btn" onclick="register()" id="register-top-btn">Registrarse</button>
                </div>
                <form id="login" class="input-group">
                    <input type="email" class="input-field" placeholder="Correo" requiered>
                    <input type="password" class="input-field" placeholder="Contraseña" requiered>
                    <button type="submit" class="submit-btn" id="login-btn">Iniciar sesión</button>
                </form>
                <form id="register" class="input-group" action="{{ route('usuario.store') }}" method="POST">
                    @csrf
                    <input type="text" for ="nombrePila" name="nombrePila" value="{{old('nombrePila')}}" class="input-field" placeholder="Nombre" requiered>
                    <input type="email" for ="correo" name="correo" value="{{old('correo')}}" class="input-field" placeholder="Correo" required>
                    <input type="number" for ="edad" name="edad" value="{{old('edad')}}" class="input-field" placeholder="Edad" required>
                    <select for ="ocupacion" name="ocupacion" class="input-field" id="ocupacion-select" required>

                        @if ( old('ocupacion') == "" )
                            <option value="Estudiante">Estudiante</option>
                            <option value="Profesor">Profesor</option>
                            <option value="Trabajador">Trabajador</option>
                        @else

                            <option value="{{old('ocupacion')}}">{{old('ocupacion')}}</option>

                            @if ( old('ocupacion') != "Estudiante" )
                                <option value="Estudiante">Estudiante</option>
                            @endif
                            @if ( old('ocupacion') != "Trabajador" )
                                <option value="Trabajador">Trabajador</option>
                            @endif
                            @if ( old('ocupacion') != "Profesor" )
                                <option value="Profesor">Profesor</option>
                            @endif

                        @endif



                    </select>
                    <input for="passwd" name="passwd" value="{{old('passwd')}}" type="password" class="input-field" placeholder="Contraseña" requiered>
                    <input for="passw2" name="passw2" value="{{old('passw2')}}" type="password" class="input-field" placeholder="Confirmar contraseña" requiered>

                    <button type="submit" class="submit-btn" id="register-btn">Registrarse</button>
                </form>
                <div class="imagen-arte">
                    <img src="{{asset('imagenes/artistas.png')}}" alt="logo">
                </div>
            </div>
        </div>

        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("btn");

            function register(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "150px";
            }

            function login(){
                x.style.left = "50px";
                y.style.left = "550px";
                z.style.left = "0";
            }
        </script>

    </body>
</html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
