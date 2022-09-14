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

if (strlen($_POST["contact"]) < 10) {
    die("contact number must be at least 10 characters");
}
if (empty($_POST["profession"])) {
    die("profession is required");
}
if(isset($_FILES['file']['name'])){
$fn=$_FILES['file']['name'];
$ext=explode(".",$fn);
$cn=count($ext);
if($ext[$cn-1]=='jpg'||$ext[$cn-1]=='pdf'){
    $tm=$_FILES['file']['tmp_name'];
    move_uploaded_file($tm,"DocumetsUpload/".$fn);
}
}
if (empty($_POST["state"])) {
    die("state is required");
}

$mysqli = require __DIR__ . "/connection.php";
$sql = "INSERT INTO hello (fname,lname,email,contact,profession,file,state,address,package,duration,people)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssssssssiii",
                  $_POST["fname"],
                  $_POST["lname"],
                  $_POST["email"],
                  $_POST["contact"],
                  $_POST["profession"],
                  $_FILES["file"]["name"],
                  $_POST["state"],
                  $_POST["address"],
                  $_POST["package"],
                  $_POST["duration"],
                  $_POST["people"]);
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

