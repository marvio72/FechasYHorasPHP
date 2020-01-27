<?php require "FechaFormato.php"; ?>
<!DOCTYPE html>
<html>

<head>
  <title>Diferencias de fechas</title>
  <meta charset="utf-8">
  <?php
  $vuelos = array(
    array('20:25 December 26, 2019 America/Mexico_City', '17:15 December 27, 2019 Europe/London', 'Londres, Inglaterra'),
    array('20:25 December 26, 2019 America/Mexico_City', '13:55 December 27, 2019 Europe/Madrid', 'Madrid, España'),
    array('23:50 December 26, 2019 America/Mexico_City', '6:5 December 27, 2019 Asia/Tokyo', 'Tokio, Japón'),
    array('16:40 December 27, 2019 America/Mexico_City', '21:25 December 29, 2019 Indian/Mahe', 'Nueva Delhi, India'),
  );
  ?>
</head>

<body>
  <h2>Duración de tiempos de vuelo de la Ciudad de México a:</h2>
  <?php
  if (isset($_POST["enviar"])) {
    $id = $_POST["ciudad"];
    $partida = new FechaFormato($vuelos[$id][0]);
    $arribo = new FechaFormato($vuelos[$id][1]);
    //
    $tiempoVuelo = $partida->diff($arribo);
    print "Partida:" . $partida . "</br>";
    print "Arribo :" . $arribo . "</br>";
    print "Tiempo de vuelo a la ciudad de " . $vuelos[$id][2] . ": $tiempoVuelo->h horas $tiempoVuelo->i minutos<br>";
    print "<a href=''>Regresar</a>";
  } else {
  ?>
    <form method="post">
      <label for="ciudad">Selecciona una ciudad</label>
      <select name="ciudad">
        <option value="0">Londres</option>
        <option value="1">Madrid</option>
        <option value="2">Tokio</option>
        <option value="3">Nueva Delhi</option>
      </select>
      <input type="submit" name="enviar" value="Enviar">
    </form>
  <?php } ?>
</body>

</html>