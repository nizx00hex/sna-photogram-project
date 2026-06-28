<?php
// $SALT = "AqwdqwdiocjqnIDUOQDODXJDMXQDIO";
// $pass = "password" . $SALT;
// $hashed = "9244dd70eb7e361f0baf21b034f7c2ea";

$pass = isset($_GET['pass']) ? $_GET['pass'] : "password";
echo(md5($pass));

//9244dd70eb7e361f0baf21b034f7c2ea