<?php

$host = "192.168.0.24"; //host name or ip
$user = "user"; //databese user name
$pass = "123456Ww"; //database password
$database = "users_php"; //database name

// get connection with mysql
$dblink = new mysql($host, $user, $pass);


print_r($dblink->execute_query("SELECT * FROM usernames;"));

// debug
#git add .
#git commit -m "fourth"
#git push

// deploy
#git pull



// select and open database