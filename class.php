<?php

class Food{
 public string $name;
 public string $origin;
 public array $ingredients;
 public function show_all_ingredients($sort_name = false) {
  $buffer = $this -> ingredients;
  if ($sort_name) {
   asort($buffer);
  }
  foreach ($buffer as $value) {
   echo $value . "<br>";
  }
 }
}

$borscht = new Food();

$borscht -> $name = "Red Borscht";
$boscht -> $origin = "Ukraine";
$boscht -> $ingredients = ['beetroot', 'beef', 'potato', 'carrot', 'onion', 'water', 'salt', 'pepper'];
echo "not sorted <br>";
$borscht -> show_all_ingredients();
echo "sorted <br>";
$borscht -> show_all_ingredients(true);
echo $borscht -> name . "<br>";
foreach ($borscht -> ingredients as $value);
 echo $value . "<br>";