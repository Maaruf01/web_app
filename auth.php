<?php
if (!isset($_SESSION)) {
	session_start();
}

require "config.php";
require "common.php";

if (isset($_POST['submit'])) {
	if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();

   try {
        $connection = new pdo($dsn, $username, $password, $options);

		$logged_in = FALSE;
		
		$usern = $_POST['username'];
		$passw = $_POST['password'];
		
		$sql = "SELECT * FROM users WHERE username = :username;";
		
        $statement = $connection->prepare($sql);
		$statement->bindParam(':username', $usern, PDO::PARAM_STR);
        $statement->execute();

		$result = $statement->fetch(PDO::FETCH_ASSOC);

		if (is_array($result)) {
			if (password_verify($passw, $result['password'])) {
				$logged_in = TRUE;
				$_SESSION['user_id'] = $result['id'];
				$_SESSION['logged_in'] = $logged_in;
				header("Location: profile.php");
			}
		} else {
            echo "Invalid Details.";
		}
	} catch (PDOException $error ) {
		echo $sql . "<br>" . $error->getMessage();
	}
}
