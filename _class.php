<?php
class Eater
{
 public string $name;
 public string $contry_born;
 public array $ingrideant;

 public function show_all_in_grideant($sort_name = false)
 {
  $buffer = $this->ingrideant;
  if ($sort_name) {
   asort($buffer, CASE_UPPER);
  }
  foreach ($buffer as $value) {
   echo $value . "<br>";
  }
 }
}

$borsh = new Eater();
$borsh->name = "BORSH";
$borsh->contry_born = "Russia/Ukraine";
$borsh->ingrideant = ['carror', 'onion', 'potato', 'св', 'Water', 'salt', 'meet'];


echo "not sorted<br>";
$borsh->show_all_in_grideant();
echo "sorted<br>";
$borsh->show_all_in_grideant(true);
echo "done";
echo "after push";