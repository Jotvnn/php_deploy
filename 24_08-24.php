<?php

// замыкание функции...
function close($elem) {
   $s = function($second) use($elem) { // "аннонимная" функция
      return $elem * $second;
   };
   return $s;
}
$rr = [];
for ($i = 0; $i <4; $i++) {
   array_push($rr, close($i));
}
for ($i = 0; $i <4; $i++) {
   echo "$i)" . $rr[0]($i) . "<br>";
   echo "$i)" . $rr[1]($i) . "<br>";
}
// ...замыкание функции

$arr = [5, 4, 2, 6, 7, 3, 3, 2, 5, 67, 4, 234, 23, 2, 5];

function bubble_sort($arr) {
 for ($i = 0; $i < 1000; $i++) {
  for ($j = 1; $j < count($arr); $j++) {
   if ($arr[$j - 1] < $arr[$j]) {
    $buffer = $arr[$j - 1];
     $arr[$j - 1] = $arr[$j];
      $arr[$j] = $buffer;
   }
  }
 }
 return $arr;
}
$arr2 = bubble_sort($arr);
echo "<br>";
print_r($arr2);

function merge(array $lst1, array $lst2) {
  $result = array();
  while ($lst1 && $lst2) {
   if ($lst1[0] > $lst2[0]) {
   $buffer = array_shift($lst2);
   }
   else {
      $buffer = array_shift($lst1);
   }
   array_push($result, $buffer);
  }
  return array_merge(array_merge($result, $lst1), $lst2);
}

// $a = [3, 4, 6, 33, 66, 88];
// $b = [2, 11, 44, 333, 333, 334];

// print_r(merge($a, $b));

function merge_sort($arr) {
   if (count($arr) <= 1) {
      return $arr;
   }
   return merge(
   merge_sort(array_slice($arr, 0, intdiv(count($arr), 2))),
   merge_sort(array_slice($arr, intdiv(count($arr), 2), count($arr)))
   );
}

print_r(merge_sort($arr)); //bubble_sort

function search_binary($arr, $search) {
   if (count($arr) <= 1 && $search != $arr[0]) {
      return 0;
   }

   $ceed = $arr[intdiv(count($arr), 2)];
   if ($ceed == $search) {
      return true;
   } else {
      if ($ceed >= $search) {
         return search_binary(array_slice($arr, 0, intdiv(count($arr), 2)), 
         $search);
      } else {
            return search_binary(array_slice($arr, intdiv(count($arr), 2), 
            count($arr)), $search);
         }
      }
      return 0;
}

function A(int $a, string $b, array $c, bool $d) {
   echo $a, $b;
   print_r($c);
   echo $d;
}

A(12, "sds", [1, 2, 3], true);



$a = array_filter([1, 2, 3, 4, 5, 6, 7], fn($a, bool $eq = false) => $a % 2 == $eq);

echo "</form>";



echo $res;

?>

<script>
   let a = getElementByClassName('calc_nums');
</script>