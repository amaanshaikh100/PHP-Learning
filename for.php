<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php
  for($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }

  echo "<br>";

  $colors = array("red", "green", "yellow", "white");

  foreach($colors as $color) {
    echo "$color <br>";
  }
?>
  
</body>
</html>