<?php
$a = $_GET["a"];
$b = $_GET["b"];

if ($a > 3) {
 echo "равно";
}
elseif ($a > 5) {
 echo "a больше b";
}
elseif ($a < 10) {
 echo "a меньше b";
}

if ($a < 100 and $b > 0) {
 echo "win";
}

if ($a > 100) {
 if ($b>0) {
  echo "lose";
 }
}

if ($a == $b):
 if ($a == 4):
  echo "afa1sd";
  echo "afas2d";
 endif;
  echo "afas3d";
  echo "afa4sd";
  echo "af5asd";
  echo "afa6sd";
  echo "a7fasd";
 elseif ($a > 10):
  echo "afa1sd";
  echo "afas2d";
  echo "afas3d";
  echo "afa4sd";
 endif;

