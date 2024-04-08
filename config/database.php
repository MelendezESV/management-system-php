<?php

/**
 * Database configuration
 */

class Database{

/**
 * Database information
 */

static public function dbCredentials(){

    $credentials = array(
        "dbhost" => "",
        "dbname" => "",
        "username" => "",
        "password" => ""
    );

    return $credentials;
}

/**
 * Database connection
 */

static public function connection(){

    $dbhost = Database::dbCredentials()['dbhost'];
    $dbname = Database::dbCredentials()['dbname'];
    $username = Database::dbCredentials()['username'];
    $password = Database::dbCredentials()['password'];

    try {
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $username, $password);
        $conn->exec("set names utf8");
    } catch (PDOException $e) {
        $dbErrorCode = $e->getCode();
        include '../resources/views/errors/500.php';
        return;
    }

    return $conn;
}

}

?>