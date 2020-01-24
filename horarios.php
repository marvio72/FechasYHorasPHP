<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Identificadores zonas horarias</title>
</head>

<body>
  <form method="post">
    <label for="paises">Paises: </label>
    <select name="paises" id="paises">
      <option value="AR">Argentina</option>
      <option value="BR">Brasil</option>
      <option value="MX">México</option>
      <option value="ES">España</option>
      <option value="US">Estados Unidos</option>
      <option value="CA">Canadá</option>
      <option value="CO">Colombia</option>
    </select>

    <input type="submit" value="Enviar" name="enviar">
  </form>
  <?php

  if (isset($_POST['enviar'])) {
    $pais = $_POST['paises'];
    $paises = DateTimeZone::listIdentifiers(DateTimeZone::PER_COUNTRY, $pais);
    print "<table>";
    foreach ($paises as $id) {
      echo "<tr>";
      echo '<td>' .$id. '</td>';
      $z = new DateTimeZone($id);
      $d = new DateTime($id);
      echo '<td>'.$d->format("H:i:s").'</td>';
      echo '</tr>';
    }
    print "</table>";
  }

  ?>
</body>

</html>