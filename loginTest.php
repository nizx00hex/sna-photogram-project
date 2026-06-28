<?php
        include "libs/load.php";
$user = "chown";
$pass = "password";


$result = User::login($user, $pass);
if($result) {
    echo "Login Success: " . $result['username'];
} else {
    echo "Login Failed";
}
