<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <ol>
  <?php

  $arr = ["Ivan", "Dmitry", "Victor"];
  for ($i = 0; $i < count($arr); $i++):
  ?>
   <li><?php echo $arr[$i] ?></li>

  <?php endfor; ?>
 </ol>
 <?php
  $a = 34;
  $b = 23;
  echo $a / $b;
 ?>
</body>

</html>