<?php
include "libs/load.php";
$user = "binwalk";
$pass = isset($_GET['pass']) ? $_GET['pass'] : '';
$result = null;

if(isset($_GET['logout'])) {
    Session::destroy();
    

    die("Session Destroyed, Login again Click<a href='loginTest.php'> Here</a><br>");
}

if(Session::get('isLoggedin')) {
    $userdata = Session::get('session_user');
    print("Welcome Back, $userdata[username]");
    $result = $userdata;
} else {
    printf("No session found, trying to login now.\n");
    $result = User::login($user, $pass);
    if($result) {
        echo "Login succss, $result[username]";
        Session::set('isLoggedin', true);
        Session::set('session_user', $result);
    } else {
        echo "Login failed ". $user;
    }
}

    echo <<<EOL
        <br>Logout Click<a href="loginTest.php?logout">Here</a>
    EOL;