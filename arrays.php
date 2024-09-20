<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php
// arrays 
  $fruits = array("apple", "wateremlon", "pineapple", "grapes");
  array_push($fruits, "orange", "kiwi", "lemon"); // array methods

  foreach($fruits as $fruit) {
    echo "$fruit <br>";
  }

  // print_r($fruits);
?>
  
</body>
</html>