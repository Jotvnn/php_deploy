<?php
if (session_status() === PHP_SESSION_NONE) session_start();
else {
 print_r($_SESSION);
}
?>

<form action = "./bio.php">

 <input type = "text" placeholder = "first name: " value = "<?= isset($_SESSION['first_name']) ? $_SESSION['first_name'] : "" ?>" name = "first name" required>
 <input type = "text" placeholder = "last name: " value = "<?= isset($_SESSION['last_name']) ? $_SESSION['last_name'] : "" ?>" name = "last name" required>
 <input type = "text" placeholder = "email: " value = "<?= isset($_SESSION['email']) ? $_SESSION['email'] : "" ?>" name = "email" required>
 <input type = "text" placeholder = "age: " value = "<?= isset($_SESSION['age']) ? $_SESSION['age'] : "" ?>" name = "age" required>
 <input type = "submit" value = "Send">

</form>