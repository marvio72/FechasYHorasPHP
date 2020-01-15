<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Valida Fecha</title>
</head>

<body>
  <h1>Validar una fecha con CheckDate</h1>
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
      <input type="text" name="anio" id="anio" list="lista">
      <datalist id="lista">
        <?php
        $anio = date('Y');
        $limite = $anio + 5;
        while ($anio <= $limite) {
          echo "<option value='$anio'></option>";
          $anio++;
        }
        ?>
      </datalist>
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
      print "La fecha que enviaste es ";
      if (checkdate($mes, $dia, $anio)) {
        print "CORRECTA";
      } else {
        print "INCORRECTA";
      }
    }
  ?>

</body>

</html>