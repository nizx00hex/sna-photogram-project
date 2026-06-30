<?php
$data = "Nisath";

// foreach (hash_algos() as $v) {
//     $r = hash($v, $data, false);
//     printf("%-12s %3d %s\n", $v, strlen($r), $r);
// }

print_r(password_algos());

// $password = "Nisath";
// $SALT = "DFJAFQIPjDPOIJWIODJHPWDqOOHPWUQWHofjspuweofh291";
// $data = md5(strrev(md5($password)) . $SALT);
// $data1 = md5(strrev(md5($password)));

// echo "with salt: ". $data . "\n";
// echo "without salt: ". $data1. "\n";