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
}