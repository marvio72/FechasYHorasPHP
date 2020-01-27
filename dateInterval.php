<?php

  $naves = array(
    array("Mariner 4", "155"),
    array("Mariner 7", "128"),
    array("Mariner 9", "168"),
    array("Viking 1", "304"),
    array("Viking 2 Orbiter/Lander", "333"),
    array("Mars Global Surveyor", "308"),
    array("Mars Pathfinder", "212"),
    array("Mars Odyssey", "200"),
    array("Mars Express", "201"),
    array("Mars Reconnaissance Orbiter", "210"),
    array("Mars Science Laboratory", "254")
  );
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Interval</title>
</head>
<body>
  <?php
  
    if (isset($_POST['enviar'])) {
      $id = $_POST['nave'];
      $nave = $naves[$id][0];
      $dias = $naves[$id][1];
      //
      $partida = new DateTimeImmutable();
      $duracion = new DateInterval('P'.$dias.'D');
      $arribo = $partida->add($duracion);
      //
      print "<h2>La sonda '".$nave."' tardó ".$dias." días en llegar a Marte"."</h2>";
      print "Fecha de partida: ".$partida->format('l, F j, Y H:i'). '<br>';
      print "Fecha de arribo: ".$arribo->format('l, F j, Y H:i').'<br>';
      print "<a href='dateInterval.php'>Regresar</a>";
    } else {
  
  ?>

  <form method="post">
    <label for="nave">Selecciona una nave</label>
    <select name="nave" id="nave">
      <?php 
        for ($i=0; $i < count($naves) ; $i++) { 
          print "<option value='".$i."'>".$naves[$i][0]."</option>";
        }
      ?>
    </select>
    <input type="submit" value="Enviar" name="enviar">
  </form>
      <?php } ?>
</body>
</html>