<?php require "FechaFormato.php"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Clonar Fechas</title>
</head>
<body>
<h1>Clonar Fechas</h1>
<?php
  $fecha1 = new FechaFormato("12/20/2019");
  $fecha2 = clone $fecha1;
  $fecha2 -> modify("+2 weeks");
  print $fecha1."<br>";
  print $fecha2."<br>";
  print "<hr>";
  $fecha3 = new DateTimeImmutable("01/10/2018");
  $fecha4 = $fecha3->modify("+1 year");
  print $fecha3->format("Y-m-d")."<br>";
  print $fecha4->format("Y-m-d")."<br>";
  
?>  
</body>
</html>