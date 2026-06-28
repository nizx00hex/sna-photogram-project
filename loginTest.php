<?php
        include "libs/load.php";
$user = "chown";
$pass = "password";


$result = User::login($user, $pass);
if($result) {
    echo "w" . $result['username'];
} else {
    echo "N";
}
