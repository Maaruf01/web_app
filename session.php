<?php
if (!isset($_SESSION)) {
    session_start(); 
}

if(!isset($_SESSION['logged_in']))
{
 header('Location: login.php');
}
?>
