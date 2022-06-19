<?php
    class Database {
        public function getConnection(){
            $host = 'localhost';
            $user = 'shed_webapp';
            $pass = 'webapp_password';
            $db = 'the_shed';
            
            $connection = new mysqli($host,$user,$pass,$db); 

            if ($connection->connect_error) {
                die("Database connection failed: " . $connection->connect_error);
            }

            return $connection;
        }
    }
?>