<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta name="author" content="amansillafelipe.guadalupe@alumnado.fundacionloyola.net">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Index</title>
  </head>
  <body>
    <main>
      <?php

      //Se requiere
      require_once 'metodos/metodos.php';

      //Objeto necesitado
      $objMetodo = new metodos();

      if(!isset($_POST["Enviar"])){
        echo '<form action="#" method="POST">';
          echo '<label for="nombre">Nombre</label>';
          echo ' <input type="text" name="nombre"></br>';
          echo '<label for="apellido">Apellido</label>';
          echo ' <input type="text" name="apellidos"></br>';
          echo '</label for="usuario">Usuario</label>';
          echo ' <input type="text" name="usuario"></br>';
          echo '<label for="correo">Correo</label>';
          echo ' <input type="email" name="correo"></br>';
          // echo '<input type="checkbox" name="preferencia">';
          echo '</br>';
          echo '<input type="submit" name="Enviar">';
        echo '</form>';
        echo '<br>';
      }
      ?>
    </main>
  </body>
</html>
