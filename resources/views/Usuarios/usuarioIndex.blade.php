<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Usuarios Página Principal</title>
  </head>
  <body>
    <h1>Hola</h1>

    <table>
      <tr>
        <th> ID </th>
        <th> NombrePila </th>
      </tr>

      @foreach ($usuarios as $usuario)
      <tr>
        <td> {{ $usuario->id }} </td>
        <td> {{ $usuario->nombrePila }} </td>
      </tr>
      @endforeach
    </table>

  </body>
</html>
