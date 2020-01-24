<?php


class Dbh{

    private $host = "localhost";
    private $user = "root";
    private $pwd = "password";
    private $dbName = "mvc";

protected function connect(){

    $dsn = 'mysql:host='.$this->host.';dbName='.$this->dbName;
    $pdo = new PDO('mysql:host=localhost;dbname=mvc', $this->user, $this->pwd);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;

}

}