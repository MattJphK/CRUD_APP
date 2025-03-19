

<?php

/**
 * Open a connection via PD) to create a new database and table with
 * structure
 */

require "config.php";

try {
    $connection = new PDO("mysql:host=$host;dbname=$dbname", $username,
        $password,$options);
    $sql = file_get_contents("data/init.sql");
    $connection->exec($sql);

    echo "Database and table users created successfully";
}
catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
 ?>
