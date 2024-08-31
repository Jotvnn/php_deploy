<?php
class Eater0
{
 public string $name;
 protected string $contry_born;
 private array $ingrideant;

 public function __construct($name, $conty, $items)
 {
  $this->name = $name;
  $this->contry_born = $conty;
  $this->ingrideant = $items;
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

class Dinner extends Eater0
{
 function show_contry()
 {
  echo $this->contry_born;
 }
 // function show_all_in_with_id()
 // {
 //  $i = 1;
 //  foreach ($this->ingrideant as $value) {
 //   echo "$i " . $value . "<br>";
 //   $i++;
 //  }
 // }
}



//$vinegred = new Eater0('vinegred', 'Russia', ['свёкла', "морковь", "лук"]);
//array_push($vinegred->ingrideant, 'горошек');
//$vinegred->show_all_in_grideant();

$dinner = new Dinner('vinegred', 'Russia', ['свёкла', "морковь", "лук"]);
echo $dinner->name;
echo $dinner->show_contry();
$dinner->show_all_in_grideant();
//print_r($dinner->$ingrideant);
