<?php
  $medi= array(3, 3 );
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>2</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h3> Area de un triangulo equilatero </h3>
    <h3><?php echo "Lado1= ".$medi[0]."<br><br> Lado2= ".$medi[1]." "; ?></h3>
    <?php
    $Area=($medi[0]*$medi[1])/2;
    echo "area del triangulo es $Area";
     ?>

  </body>
</html>
