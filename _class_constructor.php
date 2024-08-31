<?php
class Eat
{
 public string $name;
 public string $contry_born;
 public array $ingrideant;
 const BLUDO_GRAMM = 200;
 public function __construct($name, $conty, $items)
 {
  if (gettype($name) !== "string") {
   throw new TypeError("ошибка типа, $name должно быть string");
  }
  $this->name = $name;
  $this->contry_born = $conty;
  $this->ingrideant = $items;
  echo self::BLUDO_GRAMM;
  echo Eat::BLUDO_GRAMM;
 }


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


$solyanka = new Eat('solyanka', 'Russia', ['meet', 'limon', 'onion', 'potato', 'water']);

$solyanka->show_all_in_grideant();


unset($solyanka);

