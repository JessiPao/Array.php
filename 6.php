<?php
$sueldo = array(120,27000,170000 );
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>6</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h3> neta de un trabajador  numero de horas trabajadas, Tarifa la Hora y impuestos</h3>
    <h3><?php echo "Horas trabajadas= ".$sueldo[0]."<br><br> Tarifa Hora= ".$sueldo[1]." <br><br> Impuesto= ".$sueldo[2]." "; ?></h3>
    <?php
    $paganeta=($sueldo[0]*$sueldo[1])-$sueldo[2];
    echo "pago neto del trabajador es: $paganeta";
     ?>
  </body>
</html>
