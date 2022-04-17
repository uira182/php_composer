<?php

namespace Model;

class ConnectMysql
{
    public $conn;
    private $host;
    private $port;
    private $login;
    private $password;

    public function __construct(){
        $this->host = "localhost";
        $this->port = 3306;
        $this->login = "root";
        $this->password = "";

        $this->conn = $this->connect();
    }

    private function connect(){
        return true;
    }
}
