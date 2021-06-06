<?php
if (!isset($_SESSION)) {
	session_start();
}

require "config.php";
require "common.php";

if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();

try {
	$connection = new pdo($dsn, $username, $password, $options);
	
	$user = array(
		'id' => $_SESSION['user_id'],
		'firstname' => $_POST['fname'], 
		'lastname' => $_POST['lname'], 
		'email' => $_POST['email'], 
		'phone' => $_POST['tel'], 
		'address' => $_POST['address'],
		'username' => $_POST['username'],
	);

	$sql = "UPDATE users 
			SET firstname = :firstname, 
				lastname = :lastname, 
				email = :email, 
				phone = :phone, 
				address = :address, 
				username = :username 
			WHERE id = :id";

	$statement = $connection->prepare($sql);
	$statement->execute($user);
	
	if ($statement == TRUE) {
		echo 1;
	}
} catch (PDOExeption $error) {
	echo $sql . "</br>" . $error->getMesage();
}

