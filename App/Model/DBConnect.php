<?php

namespace App\Model;

use PDO;

class DBConnect
{
    public $dns;
    public $username;
    public $password;

    public function __construct()
    {
        $this->dns = "mysql:host=localhost;dbname=foodhub2;charset=utf8";
        $this->username = 'root';
        $this->password = 'root';
    }

    public function connect()
    {
        try {
            return new PDO($this->dns, $this->username, $this->password);
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }
}