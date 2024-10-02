<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  Welcome <?php echo ucfirst($_POST['name']); ?>
  <br>
  Your email address is: <?php echo strtolower($_POST['email']) ?>

  <br>
  
  <a href="/form/form.php">Go back to form</a>

</body>
</html>