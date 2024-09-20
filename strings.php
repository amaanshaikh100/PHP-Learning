<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php 
    $str = "hello world";
    
    echo strlen($str); // str length
    echo "<br>";

    echo str_word_count($str); // word count
    echo "<br>";

    echo "String Postion";
    echo "<br>";

    echo strpos($str, "hello"); // str position
    echo "<br>";

    echo strtoupper($str);
    echo strtolower($str);

    // replace string
    echo "<br>";
    echo strtoupper(str_replace("world", "universe", $str)); // replace str
    
    echo "<br>";
    echo strrev($str);
    
    // whitespace
    echo "<br>";
    echo "Trim Whitespace";
    echo "<br>";
    echo trim($str);

    // practice
    function gap() {
      echo "<br>";
    }
    gap();

    function reverse($string) {
      $newString = trim(strtoupper(strrev($string)));

      echo "Reverse String";
      gap();
      echo trim(strtoupper(strrev($string)));
      gap();
      echo "String Length";
      gap();
      echo strlen($newString);
    }

    reverse("  ! dlrow ollh ");

    gap();
    // Split 
    $y = explode(" ", $str);
    // print_r($y);
  ?>
  
</body>
</html>