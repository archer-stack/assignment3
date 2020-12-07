<?php

namespace Framework;
use \PDO;

class DatabaseConnection {
protected $servername;
protected $username;
protected $password;
protected $dbname;
protected $config;

function __construct() {
    $this->config = Registry::getInstance()->getDBConfig();
    $this->servername = $this->config["servername"];
    $this->username = $this->config["username"];
    $this->password = $this->config["password"];
     $this->dbname = $this->config["dbname"];

}

public function createConnection() {
    return new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
}
}

?>