<?php

$host = "localhost";
$dbname = "helloindia_db";
$username = "root";
$password = "";

$mysqli = new mysqli(hostname: $host, 
                     username: $username,
                     password: $password,
                     database: $dbname);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;