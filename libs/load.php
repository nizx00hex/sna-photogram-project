<?php
include_once 'includes/Mic.class.php';

function loadTemplates($name) {
    // print(__DIR__ . "/../_templates/$name.php");
    include __DIR__ . "/../_templates/$name.php";
    // include $_SERVER['DOCUMENT_ROOT'] . "sna-photogram-project/_templates/$name.php";
}

function validateCredentials($email, $password) {
    if($email == "nisath@gmail.com" and $password == "pass") {
        return true;
    } else {
        return false;
    }
}

function signup($user, $pass, $email, $phone) {
    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "Photogram";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    }
    $sql = "INSERT INTO `Photogram`.`auth` (`username`, `password`, `email`, `phone`) VALUES ('$user', '$pass', '$email', '$phone');";
    $error = false;
    // if($conn->query($sql) === TRUE) {
    //     $error = false;
    // } else {
    //     $error = $conn->error;
    // }

    try {
        $conn->query($sql);
        return false;
    } catch (mysqli_sql_exception $e) {
        return $e->getMessage();
    } finally {
        $conn->close();
    }
}