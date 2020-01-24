<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php
    $tz = array(
    "AR" => "America/Argentina/Buenos_Aires",
    "BR" => "America/Sao_Paulo",
    "CO" => "America/Bogota",
    "GU" => "America/Guatemala",
    "US" => "America/New_York",
    "CA" => "America/Vancouver",
    "ES" => "Europe/Madrid",
    "JA" => "Asia/Tokyo",
    );
  ?>
  <title>Document</title>
</head>

<body>
  <form method="post">
    <select name="ciudad" id="ciudad">
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
  <?php
  
    if(isset($_POST['enviar'])){
      $zona = $tz[$_POST['ciudad']];
      var_dump($zona);
      $local = new DateTime;
      $ciudad = new DateTime($zona);
      $offset1 = $local->getOffset();
      $offset2 = $ciudad->getOffset();
      $dif = $offset1 - $offset2;
      //
      $posicion = strrpos($zona, "/")+1;
      $cadena = substr($zona,$posicion);
      //
      $h = abs(floor($dif/3600));
      //
      if ($h==1) {
        $h .= " hora ";
      }else{
        $h .= " horas ";
      }
      //
      if ($dif == 0) {
        echo "La ciudad de México y " .$cadena. " se encuentran en la misma zona de tiempo";
      } else {
        if ($dif>0) {
          $d = "después de ";
        }else{
          $d = "antes de ";
        }
        echo "La ciudad de México está " .$h. " $d $cadena.";
      }
 
    }
  ?>

</body>

</html>