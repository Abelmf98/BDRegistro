<?php
  //Se requiere
  require 'metodos/metodos.php';

  if(isset($_POST['iniciar'])){
    $consulta="SELECT * FROM Usuario WHERE Correo='".$_POST['correo']."';";
    $objMetodo = new metodos();
    $objMetodo->realizarconsulta($consulta);
    session_start();
  }
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="amansillafelipe.guadalupe@alumnado.fundacionloyola.net">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Inicio de Sesión</title>
  </head>
  <body>
    <form action="login.php" method="post">
        <label for="correo">Correo</label>
        <input type="email" name="correo"></br>
        <label for="password">Contraseña</label>
        <input type="password" name="contrasenia"></br>
        <input type="submit" name="iniciar">
        <p>¿No tienes cuenta?Registrate!<a href="index.php">Registro</a></p>
    </form>
  </body>
</html>
