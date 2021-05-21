<?php

/**
 * Open a connection via PDO to create a
 * new database and table with structure.
 *
 */

require "config.php";

try {
    $connection = new pdo("mysql:host=$host", $username, $password, $options);

    $sql = file_get_contents("data/init.sql");
    $connection->exec($sql);
    
    echo "Database and table users were created successfully.";
} catch (PDOExeption $error) {
    echo $sqi . "</br>" . $error->getMessage();
}

?>