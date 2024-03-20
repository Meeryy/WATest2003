<?php
class DBC {
    private static $instance = null;
    private $conn;

    private function __construct() {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'test';
        
        $this->conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        
        if($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public static function getInstance() {
        if(!self::$instance) {
            self::$instance = new DBC();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->conn;
    }
}

class User {
    private $db;
    
    public function __construct() {
        $this->db = DBC::getInstance();
    }
    
    public function login($username, $password) {
        $conn = $this->db->getConnection();
        $username = $conn->real_escape_string($username);
        $password = $conn->real_escape_string($password);
        
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = $conn->query($query);
        
        if($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function register($username, $password) {
        $conn = $this->db->getConnection();
        $username = $conn->real_escape_string($username);
        $password = $conn->real_escape_string($password);
        
        $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        $result = $conn->query($query);
        
        if($result) {
            return true;
        } else {
            return false;
        }
    }
}

$user = new User();

if($user->login('johndoe', 'password123')) {
    echo "Přihlášení bylo úspěšné.";
} else {
    echo "Přihlášení selhalo.";
}


if($user->register('janedoe', 'password456')) {
    echo "Registrace byla úspěšná.";
} else {
    echo "Registrace selhala.";
}
