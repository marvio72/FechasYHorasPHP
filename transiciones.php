<?php

if (isset($_POST['enviar'])) {
  $zt = array(
    "AR" => "America/Argentina/Buenos_Aires",
    "BR" => "America/Sao_Paulo",
    "CO" => "America/Bogota",
    "GU" => "America/Guatemala",
    "US" => "America/New_York",
    "CA" => "America/Vancouver",
    "ES" => "Europe/Madrid",
    "JA" => "Asia/Tokyo",
    "MX" => "America/Mexico_City"
  );
  $id = $zt[$_POST['ciudad']];
  $tz = new DateTimeZone($id);
  $date = new DateTime($id);
  $transiciones = $tz->getTransitions(strtotime('1/1'), strtotime('12/31 +3 years'));
  $lon = count($transiciones);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Transiciones</title>
</head>
<body>
  <?php
  
    if (isset($_POST['enviar'])) {
      print '<p>Zona de tiempo: ';
      print str_replace(['/','_'], [', ', ' '], $id);
      //
      if ($lon ===1){
        echo ' no tiene cambio de horario.';
      }
      print '</p>';
      //
      if($lon>1){
        print '<table border="1">';
        print '<tr>';
        print '<th>Año</th>';
        print '<th>Fecha</th>';
        print '<th>Reloj</th>';
        print '</tr>';
        //
        for ($i=1; $i < $lon; $i++) { 
          $date->setTimestamp($transiciones[$i]['ts']);
          print '<tr>';
          print '<td>'.$date->format('Y').'</td>';
          print '<td>'.$date->format('F j').'</td>';
          print '<td>';
          if ($transiciones[$i]['isdst']) {
            print "Adelantar el reloj 1 hr";
          }else{
            print "Atrasar el reloj 1 hr";
          }
          print '</td>';
          print '</tr>';
        }
        print '</table>';
      }
      print "<a href='transiciones.php'>Regresar</a>";
    }else{
    ?>
    
    <form method="post">
      <label for="ciudad">Selecciona una ciudad</label>
      <select name="ciudad" id="ciudad">
        <option value="MX">Ciudad de México</option>
        <option value="AR">Buenos Aires</option>
        <option value="BR">Sao Paulo</option>
        <option value="CO">Bogotá</option>
        <option value="GU">Guatemala</option>
        <option value="ES">Madrid</option>
        <option value="US">Nueva York</option>
        <option value="CA">Vancouver</option>
        <option value="JA">Tokio</option>
      </select>
      <input type="submit" value="Enviar" name="enviar">
    </form>
  <?php } ?>
</body>
</html>