<?php
    class User {
        private $conn;

        public static function signup($user, $pass, $email, $phone) {
            $conn = Database::getConnection();
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

        public function __construct() {
            $this->conn = Database::getConnection();
            $this->conn->query();
        }
    }