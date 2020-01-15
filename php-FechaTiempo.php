<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Date y time</title>
</head>
<!-- repaso de funcion de time() y date() -->
<body>
  <?php 
    $t = time();
    print "<p>".$t."</p>";
    $fecha = date("d/m/Y",$t);
    print "<p>".$fecha."</p>";
    $hora = date("h:i:s", $t);
    print "<p>".$hora."</p>";

    $diaSemana = date("l",$t);
    $diaMes = date("j",$t);
    $mes = date("F",$t);
    $anio = date("Y",$t);
    $hora = date("H",$t);
    $ampm = date("A",$t);
    $min = date("i",$t);

    print "Hoy es " .$diaSemana. " del mes " .$mes. " a " .$diaMes. " del año " .$anio. " y son las " .$hora. " y " .$min. " minutos.";
  ?>
</body>
</html>