<?php

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