<?php

namespace App\Model;

class BaseModel
{
    public $connect;
    public $table;

    public function __construct()
    {
        $db = new DBConnect();
        $this->connect = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id=$id";
        $stmt = $this->connect->query($sql);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function deleteById($id)
    {
        $sql = "DELETE FROM $this->table WHERE id=$id";
        $this->connect->query($sql);
    }
}