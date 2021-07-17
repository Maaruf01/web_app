<?php
// chech if user is logged in
require 'session.php';

require "config.php";
require "common.php";

if (isset($_POST['submit'])) {
	if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();

    try {
        $connection = new pdo($dsn, $username, $password, $options);
        
        $title = $_POST['title'];
        $content = $_POST['post'];
        $date = date('Y-m-d H:i:s');
        $id =  $_SESSION['user_id'];
              
        $sql = "INSERT INTO posts (title, content, time, user_id) VALUES (:title, :content, :time, :user_id);";
        
        $statement = $connection->prepare($sql);
        $statement->bindParam(':title', $title, PDO::PARAM_STR);
        $statement->bindParam(':content', $content, PDO::PARAM_STR);
        $statement->bindParam(':time', $date, PDO::PARAM_STR);
        $statement->bindParam(':user_id', $id, PDO::PARAM_STR);
        $statement->execute();

        if ($statement) {
            echo "<script>alert('Post published successfully.');</script>";
            echo "<script type='text/javascript'> document.location = 'post.php'; </script>";
        } else {
            echo "<script>alert('Something went wrong!.');</script>";
            echo "<script type='text/javascript'> document.location = 'post.php'; </script>";
        }
    } catch (PDOExeption $error) {
        echo $sql . "</br>" . $error->getMesage();
    }
}

