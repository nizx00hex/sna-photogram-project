<?php

function loadTemplates($name) {
    // print(__DIR__ . "/../_templates/$name.php");
    include __DIR__ . "/../_templates/$name.php";
    include $_SERVER['DOCUMENT_ROOT'] . "sna-photogram-project/_templates/$name.php";
}