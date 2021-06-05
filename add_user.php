<?php
if (!isset($_SESSION)) {
	session_start();
}

require "config.php";
require "common.php";

//if (isset($_POST['submit'])) {
	if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();

	try {
		$connection = new pdo($dsn, $username, $password, $options);
		
        $date = date('Y-m-d H:i:s');

        $passw = $_POST['password'];

        $hashed_passw = password_hash($passw, PASSWORD_BCRYPT);
        
        $new_user = array(
			'firstname' => $_POST['fname'], 
			'lastname' => $_POST['lname'], 
			'email' => $_POST['email'], 
			'phone' => $_POST['tel'], 
			'address' => $_POST['address'],
			'username' => $_POST['username'],
			'password' => $hashed_passw,
			'date' => $date,
		);

		$sql = sprintf(
			"INSERT INTO %s (%s) values (%s)",
			"users",
			implode(", ", array_keys($new_user)),
			":" . implode(", :", array_keys($new_user))
		);
	
		$statement = $connection->prepare($sql);
		$statement->execute($new_user);
		
		echo 1;
	} catch (PDOExeption $error) {
		echo $sql . "</br>" . $error->getMesage();
	}
//}
