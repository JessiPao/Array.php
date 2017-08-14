<?php
  $Num = array(8 );
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>7</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h3>Numero entero elevado al cubo y muestre en pantalla:</h3>
    <h3><?php echo "Num  = ".$Num[0]." "; ?></h3>
    <?php
    $Cubo=pow($Num[0],3);
    echo "El Numero del cubo ".$Num[0]." es: $Cubo";
     ?>

  </body>
</html>
