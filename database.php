<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "Sam@MySQL.123";
$dbName = "login_register";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}


