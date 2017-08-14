<?php
 $Num = array(5, 8, 9 );
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>1</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h4> calcule el promedio  de tres nota y lo Imprima en pantalla en pantalla </h4>

    <h4><?php echo "Nota Num1: ".$Num[0]."<br><br> Nota Num2: ".$Num[1]." <br><br> Nota Num3: ".$Num[2].""; ?></h4>
    <?php
   $prome = ($Num[0]+$Num[1]+$Num[2]/3);
   echo "El promedio de notas es: $prome";
     ?>
  </body>
</html>
