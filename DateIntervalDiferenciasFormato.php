<?php require "FechaFormato.php"; ?>
<!DOCTYPE html>
<html>

<head>
  <title>Diferencias de fechas</title>
  <meta charset="utf-8">
  <?php
  $guerras = array(
    array('1914-06-28', '1918-11-11', 'Primera Guerra Mundial'),
    array('1938-9-1', '1945-9-2', 'Segunda Guerra Mundial'),
    array('1910-11-20', '1917-2-5', 'Revolución Mexicana'),
    array('1789-07-14', '1799-12-25', 'Revolución Francesa'),
    array('1917-10-25', '1991-12-25', 'Revolución Rusa'),
  );
  ?>
</head>

<body>
  <h2>Duración de conflictos bélicos:</h2>
  <?php
  if (isset($_POST["enviar"])) {
    $id = $_POST["guerra"];
    $inicio = new FechaFormato($guerras[$id][0]);
    $final = new FechaFormato($guerras[$id][1]);
    //
    $diff = $inicio->diff($final);
    print "Inicio:" . $inicio . "</br>";
    print "Final :" . $final . "</br>";
    print "Duración de " . $guerras[$id][2] . ": " . $diff->format('%y 	años %m meses y %d días') . "<br>";
    print "En total " . number_format($diff->days, 0) . " días<br>";
    print "<a href=''>Regresar</a>";
  } else {
  ?>
    <form method="post">
      <label for="guerra">Selecciona un conflicto armado</label>
      <select name="guerra">
        <?php
        for ($i = 0; $i < count($guerras); $i++) {
          print "<option value='" . $i . "'>";
          print $guerras[$i][2] . "</option>";
        }
        ?>
      </select>
      <input type="submit" name="enviar" value="Enviar">
    </form>
  <?php } ?>
</body>

</html>