<?php

if (empty($_POST["fname"])) {
    die("Name is required");
}
if (empty($_POST["lname"])) {
    die("Name is required");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (empty($_POST["gender"])) {
    die("gender is required");
}

if (empty($_POST["cardnumber"])) {
    die("cardnumber is required");
}
if (empty($_POST["cvc"])) {
    die("cvc is required");
}

$mysqli = require __DIR__ . "/connection.php";
$sql = "INSERT INTO payment(fname,lname,email,dob,gender,cardnumber,cvc,expdate)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssssssss",
                  $_POST["fname"],
                  $_POST["lname"],
                  $_POST["email"],
                  $_POST["dob"],
                  $_POST["gender"],
                  $_POST["cardnumber"],
                  $_POST["cvc"],
                  $_POST["expdate"]);
if ($stmt->execute()) {

    header("Location: signup_success.php");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}
