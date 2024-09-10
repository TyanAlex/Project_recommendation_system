<?php

$server = "localhost";
$username = "root";
$password = "DontgiveUp_6606";
$dbname = "recSystemSearch";


$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}