<?php

  if(isset($_POST['fecha'])) {
    $f = $_POST['fecha'];
    list($a,$m,$d) = explode("-",$f);
    if (checkdate($m, $d, $a)) {
      $edad = (date("md")<$m.$d?date("Y")-$a-1:date("Y")-$a);
      print "<p>Tienes ".$edad." años</p>";
    } else {
      print "<p>Fecha en formato erróneo</p>";
    }

  }

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calculo de Edades</title>
</head>

<body>
  <form method="post">
    <p>
      <label for="fecha">Escribe tu fecha de nacimiento:</label>
      <input type="text" name="fecha" placeholder="YYYY-MM-DD">
    </p>
    <p>
      <input type="submit" name="envia" value="Enviar Fecha">
    </p>
  </form> </body> </html>