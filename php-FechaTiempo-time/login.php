<?php

  if (isset($_POST["login"])) {
    session_start();
    if ($_POST['usuario']=="mrre" && $_POST['clave']=="12345") {
      $_SESSION['sesion']=time();
      header("location:accesoSecreto.php");
      exit;
    }
  }

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Entrada al sistema</title>
</head>
<body>
  <h1>Limitar el tiempo de una sesión</h1>
  <form method="post">
    <p>
      <label for="usuario">Usuario:</label>
      <input type="text" name="usuario" id="usuario">
      
    </p>
    <p>
      <label for="clave">Password:</label>
      <input type="password" name="clave" id="clave">
    </p>
    <p>
      <input type="submit" value="Entrar" name="login">
    </p>
  </form>
  <?php
  
    if(isset($_GET['expiro'])){
      print "<p>Su sesión de trabajo expiró. Favor de volver a registrarse</p>";
    }
  
  ?>
</body>
</html>