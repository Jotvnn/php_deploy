<?php
session_start();

echo "<br>Your first name is " . $_SESSION['first_name'];
echo "<br>Your last name is " . $_SESSION['last_name'];
echo "<br>Your provided email is " . $_SESSION['email'];
echo "<br>You are " . $_SESSION['age'] . " years old";
echo "<br><a href='./personal.php'> Go to Personal </a>";
?>