<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "wecare";
$connection = mysqli_connect($server, $username, $password, $db);

if(!$connection){
    die("Connection to database failed" . mysqli_connect_error());
}

?> 
