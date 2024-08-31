<?php
echo '<select name = "people">';
for ($i = 1; $i < 10; $i++) {
 echo "<option>$i</option>\n";
}
echo '</select>';

$arr = ["a", "b", "c"];

foreach ($arr as $val) {
 array_push($arr, $i++);

 echo $val . "<br>";
}

var_dump($arr);