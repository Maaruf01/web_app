<?php
session_start(); 
require "config.php";
$login_session = $_SESSION['logged_in'];
$user_id = $_SESSION['user_id'];

$connection= new PDO($dsn, $username, $password, $options);

if(!isset($login_session))
{
echo "You failed !!";
 header('Location: index.php');
}
?>
