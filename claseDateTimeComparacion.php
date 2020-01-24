<?php require "FechaFormato.php" ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Comparar una fecha</title>
</head>
<body>
  <h1>Comparar una fecha</h1>
  <?php 
    $fecha1 = new FechaFormato("1100 America/New_York");
    $fecha2 = new FechaFormato("0800 America/Los_Angeles");

    if ($fecha1 === $fecha2) {
      print "Es el mismo objeto<br>";
    } else if ($fecha1==$fecha2) {
      print "Las fechas son iguales <br>";
    } else if ($fecha1<$fecha2) {
      print "La fecha 1 es menor a la fecha 2<br>";
    } else if ($fecha1>$fecha2) {
      print "La fecha 1 es mayor a la fecha 2<br>";
    }
    print "Fecha 1: ".$fecha1."<br>";
    print "Fecha 2: ".$fecha2."<br>";
  ?>
</body>
</html>