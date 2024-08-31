<?php
if (session_status() === PHP_SESSION_NONE) {
 session_start();

 if (isset($_SESSION["first_name"])) {
  print_r($_SESSION);
  echo "<br><a href='./go_to_help.php'>info </a> <br>";
  echo "<br><a href = './logout.php'>Exit</a>";

} else {
  echo "<h1>Personal</h1>";
  require('./signin.php');
  echo "Nice to meet You";
 }
}
?>