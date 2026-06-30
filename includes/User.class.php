<?php
class User {
    private $conn;
    private static $SALT = "ASFALSFNQasdkmqwioAFKQWPFQ124XQWENODwd0";

    public static function signup($user, $pass, $email, $phone) {
        $conn = Database::getConnection();

        $options = [
            'cost' => 9,
        ];

        $pass_hash = password_hash($pass, PASSWORD_DEFAULT, $options);
        $sql = "INSERT INTO `Photogram`.`auth` (`username`, `password`, `email`, `phone`) VALUES ('$user', '$pass_hash', '$email', '$phone');";
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

    public function __construct() {
        $this->conn = Database::getConnection();
        $this->conn->query();
    }

    public static function login($username, $password) {
        // $pass_hash = md5(strrev(md5($password)) . User::$SALT);
        $query = "SELECT * FROM Photogram.auth WHERE `username` = '$username'";
        $conn = Database::getConnection();
        $result = $conn->query($query);
        if($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            // if($row['password'] == $pass_hash) {
            if(password_verify($password, $row['password'])) {
                return $row;
            } else {
                return false;
            }
        } else {
            return false;
        }



    }

    public function setBio() {

    }
    public function getBio() {

    }

    public function setAvatar() {

    }

    public function getAvatar() {
        
    }
}



