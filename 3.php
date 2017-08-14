<?php
  $medi = array(6, 3 );
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>3</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h3> Area de un rectangulo </h3>
    <h3><?php echo "Base = ".$medi[0]."<br><br> Altura= ".$medi[1]." "; ?></h3>
    <?php
    $Area=($medi[0]*$medi[1]);
    echo "area del rectangulo es: $Area";
     ?>

  </body>
</html>
