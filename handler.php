<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <style
    <title>Calculated!</title>
  </head>

  <body>
    
    <h1>Calculated!<h1>
    <?php
    $rad = "";
    if ( isset( $_POST['rad'] ) ){
      $rad = $_POST['rad'];
    }

    if ($rad > 0) {
      $r = ($rad/2);
      $b = ($r*$r);
      $A = ($b*pi());
      $A = (round ($A, 2));
      echo "<p>The area is " .$A. "</p>/n";
 
      $y = (2*pi());
      $C = ($y*$r);
      $C = (round($C, 2));  
      echo "<p>The circumference is " .$C. "</p>\n";

    }
    // echo "<h1>My Program</h1>\n";
    // echo "<p>My Variable is = ".$v."</p>\n";

    if ($rad<=0) {
      echo "Error! Input invalid! Did you enter a 0 or a negative number?";
    }
    ?>
    
  </body>
  
</html>
