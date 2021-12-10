<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
  </head>
  <body>
    <?php
    require_once 'metodos.php';
    $objMetodo = new metodos();
    if(!isset($_POST["Enviar"])){
      echo '<form action="#" method="POST">';
        echo '<label>';
          echo '<input type="text" name="nombre"></br>';
        echo '</label>';
        echo '<label>';
          echo '<input type="email" name="correo"></br>';
        echo '</label>';
        echo '<input type="submit" name="Enviar">';
      echo '</form>';
      echo '</br>';
      echo '<a href="ndex.php">Volver a la página principal</a>';
    }
    ?>
  </body>
</html>
