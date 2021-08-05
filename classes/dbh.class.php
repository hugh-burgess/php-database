<?php

class Dbh
{
    // Private properties that only this class has access to.
    private $host = "localhost"; // hostname
    private $user = "check24"; // username for connection to server, default is root
    private $pwd = "check24.de"; // password to server , empty cause not yet set
    private $dbName = "check24"; // database name, name of database and must match the real name of database

    //method
    protected function connect(): PDO
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName; // data source name

        // create a PDO connection
        $pdo = new PDO($dsn, $this->user, $this->pwd); // take the dsn and also point to username and password

        // optional attribute to pull data from db. we can set a default attribute
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // defines attribute and sets it
        return $pdo;
    }
}