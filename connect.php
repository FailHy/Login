<?php

$sname = "localhost";
$uname = "root"; 
$password = "";

$db_name = "webtest";

$connect = mysqli_connect($sname, $uname, $password, $db_name);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
