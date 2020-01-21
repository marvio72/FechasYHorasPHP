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
      

      <label for="signoDias">Operación: </label>
      <select name="signoDias" id="signoDias">
        <option value="1">Suma</option>
        <option value="0">Resta</option>
      </select>

      <label for="sumaDias">Días: </label>
      <input type="text" name="sumaDias" id="sumaDias" size="6">

      <label for="signoSemanas">Operación: </label>
      <select name="signoSemanas" id="signoSemanas">
        <option value="1">Suma</option>
        <option value="0">Resta</option>
      </select>
      
      <label for="sumaSemanas">Semanas: </label>
      <input type="text" name="sumaSemanas" id="sumaSemanas" size="6">
        
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
      $fecha = new FechaFormato($anio."-".$mes."-".$dia);
      //
      $signoDias = isset($_POST["signoDias"]) ? $_POST["signoDias"]: "";
      $sumaDias = isset($_POST['sumaDias']) ? $_POST['sumaDias']:"";
      $signoSemanas = isset($_POST['signoSemanas']) ? $_POST['signoSemanas'] : "";
      $sumaSemanas = isset($_POST['sumaSemanas']) ? $_POST['sumaSemanas'] : "";

      $cadena = "";
      $cadena2 = "";
      if ($sumaDias!="") {
        if ($signoDias == "1") {
          $cadena .= "+".$sumaDias." days ";
          $cadena2 .= "suma ".$sumaDias." días ";
        } else{
          $cadena .= "-".$sumaDias." days ";
          $cadena2.= "resta ".$sumaDias." días ";
        }
      }

      if ($sumaSemanas!="") {
        if ($signoSemanas=="1") {
          $cadena .= "+".$sumaSemanas." weeks ";
          $cadena2 .= "suma ".$sumaSemanas." semanas ";
        } else {
          $cadena .= "-".$sumaSemanas." weeks ";
          $cadena2 .= "resta ".$sumaSemanas." semanas ";
        }
      }


      print $fecha. " " .$cadena2. "<br>";
      print "<hr>";
      if ($cadena!="") {
        print $fecha->modify($cadena);
      } else {
        print "No hay modificación alguna";
      }
    }
  ?>

</body>

</html>