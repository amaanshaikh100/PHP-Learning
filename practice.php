<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php
  echo "Practice PHP";
  echo "<br>";

  $a = 5;
  // $a = (string) $a;
  // var_dump($a);

  function test() {
    echo $GLOBALS['a'];
  }

  test();

  // $fruits = array("apple", "watermelon", "grapes", "mango");

  // foreach($fruits as $fruit) {
  //   echo 'Fruit: ' . $fruit;
  //   echo "<br>";
  // }

  // for($x = 0; $x <= 10; $x++) {
  //   echo "Count " . $x;
  //   echo "<br>";
  // }
  
  // $firstName = "amaan";
  // echo "string length: " . strlen($firstName);
  // echo "<br>";
  // echo "word count: " . str_word_count($firstName);
  // echo "<br>";
  // echo "word reverse: " . strrev($firstName);
  // echo "<br>";
  // echo "word replace " . str_replace("a", "_", $firstName);
  // echo "<br>";
  // echo "word uppercase " . strtoupper($firstName);
?>
  
</body>
</html>