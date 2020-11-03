<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Casa de la cultura</title>
        <link href="login.css" rel="stylesheet">
        <link href>
    </head>

    <body>
        <div class="hero">
            <div class="form-box">
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
                <form id="register" class="input-group">
                    <input type="text" class="input-field" placeholder="Nombre" requiered>
                    <input type="email" class="input-field" placeholder="Correo" requiered>
                    <input type="number" class="input-field" placeholder="Edad" required>
                    <label for="ocupacion">Ocupación:</label>
                    <select id="ocupacion-select" name="ocupacion">
                        <option value="seleccione">Seleccione una ocupación</option>
                        <option value="Estudiantes">Estudiante</option>
                        <option value="Profesor">Profesor</option>
                        <option value="Trabajador">Trabajador</option>
                    </select>
                    <input type="password" class="input-field" placeholder="Contraseña" requiered>
                    <input type="password" class="input-field" placeholder="Confirmar contraseña" requiered>
                    <button type="submit" class="submit-btn" id="register-btn">Registrtarse</button>
                </form>
                <div class="imagen-arte">
                    <img src="resources/artistas.png">
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