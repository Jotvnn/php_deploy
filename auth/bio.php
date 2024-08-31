<?php
if (session_start() === PHP_SESSION_NONE) {
 session_start();
 }
 ?>

<h1>User's Bio</h1>
<?php
$_SESSION["first_name"] = $_GET['first_name'];
$_SESSION["last_name"] = $_GET['last_name'];
$_SESSION["email"] = $_GET['email'];
$_SESSION["age"] = $_GET['age'];

print_r($_SESSION);
?>

<a href = "./personal.php"><p>Go to Personal</p></a>