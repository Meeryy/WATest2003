<?php

class DBC
{
    const SERVER_IP = "localhost";
    const USER = "root";
    const PASSWORD = "student";
    const DATABASE = "LoginTest";
     private static $instance = null;
     private $connection;


     private function __construct(){
        $this->connection = mysqli_connect(
            self::SERVER_IP,
            self::USER,
            self::PASSWORD,
            self::DATABASE
        );
        
        if(!$this->connection){
            die("Could not connect to DB");
     }

    }
    public static function getInstance(){ 
        if(!self::$instance){
            self::$instance = new DBC();
    }
    return self::$instance;
}
    public function getConnection()
    {
       return $this->connection;
    }

    public function closeConnection()
    {
        if ($this->connection) {
            mysqli_close($this->connection);
        }
        self::$instance = null; //resets istance
    }
}