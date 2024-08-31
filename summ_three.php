<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
<h1 style='color:red;'><?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

echo $a ** 2 + $b ** 2 + $c ** 2;
?>
</h1>
</body>
</html>
