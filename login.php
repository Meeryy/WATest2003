
<?php 
require_once("./classes/User.php");
require_once(".classes/DBC.php");
include 'DBC.php';

$pwd = $_POST['password'];
$pwd_hashed = get_pwd_from_DBC($username);
  
if(empty($_POST["name"]) || empty($_POST["password"])){
  header('Location: index.php');
  exit(); 
}
$user = new User(1, $_POST['name'], $_POST['password']);

echo $user;
$pwd_hashed = password_hash("password", PASSWORD_BCRYPT, []);

if (password_verify($pwd, $pwd_hashed)) {
  echo 'Location: index.php';
}
else {
  echo "Password incorrect.";
}

$conn->close();

session_start();

if(!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

include('extrapages.php');

$name = $_POST['name'];

$connection = DBC::getInstance()->getConnection();