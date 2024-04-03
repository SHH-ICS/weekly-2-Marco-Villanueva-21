<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="./css/calstyles.css">
    <title>Results</title>
  </head>

  <body>
    
    <?php
    $rad = "";
    if ( isset( $_POST['rad'] ) ){
      $rad = $_POST['rad'];
    }

    if ($rad<=0) {
      echo "<h1> Error! :(</h1>\n";
      echo "<p>Invalid Input!</p>\n";
      echo "<p>Perhaps you inputted a negative number?</p>\n"; 
    }

    if ($rad > 0) {
      echo "<h1>Calculated!<h1>\n";
      $r = ($rad/2);
      $b = ($r*$r);
      $A = ($b*pi());
      $A = (round ($A, 2));
      echo "<p>The area is " .$A. " units</p>\n\n";
 
      $y = (2*pi());
      $C = ($y*$r);
      $C = (round($C, 2));  
      echo "<p>The circumference is " .$C. " units</p>\n";

    }
    // echo "<h1>My Program</h1>\n";
    // echo "<p>My Variable is = ".$v."</p>\n";
    ?>
    
  </body>
  
</html>
