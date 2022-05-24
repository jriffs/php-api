<?php

    //general database connection script that will be called using the php 'include' statement
    class Database{
        //database credentials for connecting
        private $host = "localhost";
        private $db_name = "api_db";
        private $username = "root";
        private $password = "";
        public $conn;

        //function that actually connects to the database
        public function getConnection(){
            
            $this->conn = null;

            try {
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
                $this->conn->exec("set names utf8");
            } catch (PDOException $exception) {
                echo "Connection Error: " . $exception->getMessage();
            }

            return $this->conn;
        }

    }
?>