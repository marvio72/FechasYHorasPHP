<?php require "FechaFormato.php"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Valida Fecha</title>
</head>

<body>
  <h1>Modificar una fecha</h1>
  <form method="post">
    <p>
      <label for="mes">Mes: </label>
      <select name="mes" id="mes">
        <?php
        $meses = [1 => 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
        foreach ($meses as $key => $value) {
          echo "<option value='$key'>$value</option>";
        }
        ?>
      </select>
      <label for="dia">dia: </label>
      <select name="dia" id="dia">
        <?php
        for ($i = 1; $i <= 31; $i++) {
          echo "<option>$i</option>";
        }
        ?>
      </select>
      <label for="anio">Año: </label>
      <input type="text" name="anio" id="anio" size="6">

      <label for="horas">Horas: </label>
      <input type="number" name="horas" id="horas" max="24" min="1" size="6">
      
      <label for="minutos">Minutos: </label>
      <input type="number" name="minutos" id="minutos" max="60" min="1" size="6">
      
      <label for="segundos">Segundos: </label>
      <input type="number" name="segundos" id="segundos" max="60" min="1" size="6">
        
    </p>
    <p>
      <input type="submit" name="valida" value="Valida Fecha">
    </p>
  </form>
  <?php

    if (isset($_POST["valida"])) {
      $mes = isset($_POST["mes"]) ? $_POST["mes"] : "0";
      $dia = isset($_POST["dia"]) ? $_POST["dia"] : "0";
      $anio = isset($_POST["anio"]) ? $_POST["anio"] : "0";
      $horas = isset($_POST['horas']) ? $_POST['horas'] : "0";
      $min = isset($_POST['minutos']) ? $_POST['minutos'] : "0";
      $seg = isset($_POST['segundos']) ? $_POST['segundos'] : "0";
      try {
        $fecha = new FechaFormato();
        //
        if ($anio!="0" && $mes!="0" && $dia!="0" && $horas!="0" && $min!="0") {
          $fecha->setDate((integer) $anio, $mes, $dia);
          $fecha->setTime((integer) $horas, (integer) $min, (integer) $seg);
          print $fecha."<br>";
        } else {
          print "Faltan parámetros<br>";
        }
      } catch (Exception $e) {
        DateTime::getLastErrors();
        print $e->getMessage();
      }
    }
  ?>

</body>

</html>