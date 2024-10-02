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
  $students = array("amaan", "moin", "mahira");
  array_push($students, "madiha");
  

  foreach($students as $student) {
    echo "Student: " . $student;
    echo "<br>";
  }

  echo $students[0];

?>
  
</body>
</html>