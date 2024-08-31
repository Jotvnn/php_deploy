<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Task2</title>
</head>
<body>
 <?php
  $burger = 4.95;
  $milkshake = 1.95;
  $coke = 0.85;
  $tax = 0.075;
  $tip = 0.16;
  $order = 2 * $burger + $milkshake + $coke;
  $total = $order + $tax * $order + $tip * $order;
  echo $order . "<br>";
  echo $total . "<br>";
 ?>
</body>
</html>