

<?php

/**
 * Open a connection via PD) to create a new database and table with
 * structure
 */

require "config.php";
//the require statement isn't working so I'm adding it in directly
$host = "localhost";
$username = "root";
$password = "Ilovetea24!";
$dbname = "test";
$dsn = "mysql:host=$host;dbname=$dbname"; // will use later
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
$sql = "";
try {

    $connection = new PDO("mysql:host=$host;dbname=$dbname", $username,
        $password,$options);
    $sql = file_get_contents("init.sql");
    $connection->exec($sql);

    echo "Database and table users created successfully";
}
catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
 ?>
