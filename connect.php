<?php


require_once 'config.php';

function connect(string $host, string $db, string $user, string $password)
{
    try {
        $cnx = "pgsql:host=$host;port=5432;dbname=$db;";

        // make a database connection
         new PDO(
            $cnx,
            $user,
            $password,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );

        echo " Opened database successfully";
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

return connect($host, $db, $user, $password);