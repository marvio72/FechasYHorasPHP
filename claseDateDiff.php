<?php
require "FechaFormato.php";
$meses = [1 => 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Diferencias entre fechas</title>
</head>

<body>
  <h1>Diferencias entre fechas</h1>
  <form method="post">
    <p>
      <label for="mes1">Mes: </label>
      <select name="mes1" id="mes1">
        <?php
        foreach ($meses as $key => $value) {
          echo "<option value='$key'>$value</option>";
        }
        ?>
      </select>
      <label for="dia1">dia: </label>
      <select name="dia1" id="dia1">
        <?php
        for ($i = 1; $i <= 31; $i++) {
          echo "<option>$i</option>";
        }
        ?>
      </select>
      <label for="anio1">Año: </label>
      <input type="text" name="anio1" id="anio1" size="6">
    </p>
    <p>
      <label for="mes2">Mes: </label>
      <select name="mes2" id="mes2">
        <?php
        foreach ($meses as $key => $value) {
          echo "<option value='$key'>$value</option>";
        }
        ?>
      </select>
      <label for="dia2">dia: </label>
      <select name="dia2" id="dia2">
        <?php
        for ($i = 1; $i <= 31; $i++) {
          echo "<option>$i</option>";
        }
        ?>
      </select>
      <label for="anio2">Año: </label>
      <input type="text" name="anio2" id="anio2" size="6">
    </p>
    <p>
      <input type="submit" name="diferencia" value="Diferencia">
    </p>
  </form>
  <?php
  if (isset($_POST["diferencia"])) {
    $mes1 = isset($_POST["mes1"]) ? $_POST["mes1"] : "0";
    $dia1 = isset($_POST["dia1"]) ? $_POST["dia1"] : "0";
    $anio1 = isset($_POST["anio1"]) ? $_POST["anio1"] : "0";
    $fecha1 = new FechaFormato($anio1 . "-" . $mes1 . "-" . $dia1);
    //
    $mes2 = isset($_POST["mes2"]) ? $_POST["mes2"] : "0";
    $dia2 = isset($_POST["dia2"]) ? $_POST["dia2"] : "0";
    $anio2 = isset($_POST["anio2"]) ? $_POST["anio2"] : "0";
    $fecha2 = new FechaFormato($anio2 . "-" . $mes2 . "-" . $dia2);
    //
    print $fecha1 . "<br>";
    print $fecha2 . "<br>";
    print "<hr>";
    $dif = $fecha1->diff($fecha2);
    print $dif->format('%R%a días');
  }
  ?>
</body>

</html>