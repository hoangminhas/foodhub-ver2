<?php

namespace App\Model;

class StoreModel extends BaseModel
{
    public $table = 'stores';

    public function getStore($userId)
    {
        $sql = "select * from $this->table where user_id=$userId";
        $stmt = $this->connect->query($sql);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function getFoodOfStore($storeId)
    {
        $sql = "select * from `foods` where store_id = $storeId";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function addFood($food, $id)
    {
        $sql = "insert into $this->table (name,image) values (?,?) where user_id = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $food['name']);
        $stmt->bindParam(2, $food['image']);
        $stmt->bindParam(3, $id);
        $stmt->execute();
    }
}