<?php
$Num = array(6);
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>6</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
   <h3>operaciones: <br> El doble de un numero entero <br> El triple de un numero entero</h3>
   <h3><?php echo "Valor de numero es= ".$Num[0].""; ?></h3>
   <?php
    $doble=$Num[0]*2;
    $triple=$Num[0]*3;
    echo "El numero doble ".$Num[0]." es: $doble <br> <br> El numero triple ".$Num[0]." es: $triple";
    ?>
  </body>
</html>
