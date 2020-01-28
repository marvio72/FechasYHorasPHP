<!DOCTYPE html>
<html>

<head>
  <title>En qué día cae tu cumpleaños</title>
  <meta charset="utf-8">
</head>

<body>
  <h2>En qué día cae tu cumpleaños:</h2>
  <?php
  if (isset($_POST["calcular"])) {
    $dia = $_POST["dia"];
    $mes = $_POST["mes"];
    $inicio = new DateTimeImmutable('2019' . "-" . $mes . "-" . $dia);
    $intervalo = new DateInterval('P1Y');
    $fin = $inicio->modify("5 Year");
    //
    $periodo = new DatePeriod($inicio, $intervalo, $fin, DatePeriod::EXCLUDE_START_DATE);
    echo '<ol>';
    foreach ($periodo as $p) {
      echo '<li>' . $p->format('l, F j, Y') . '</li>';
    }
    echo '</ol>';
    print "<a href=''>Regresar</a>";
  } else {
  ?>
    <form method="post">
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
      <input type="number" name="dia" max='31' min='1'>
      </p>
      <p>
        <input type="submit" name="calcular" value="Calcular">
      </p>
    </form>
  <?php } ?>
</body>

</html>