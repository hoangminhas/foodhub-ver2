<?php

namespace App\Controller;

use App\Model\StoreModel;

class StoreController
{
    public $storeModel;
    public function __construct()
    {
        $this->storeModel = new StoreModel();
    }

    public function showAll()
    {
        $user = $_SESSION["user"];
        $store = $this->storeModel->getStore($user->id);
        $foods = $this->storeModel->getFoodOfStore($store->id);
        include_once "App/View/store/list.php";
    }

    public function createFood($request)
    {
        $user = $_SESSION["user"];
        $store = $this->storeModel->getStore($user->id);
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include_once "App/View/store/create-food.php";
        } else {
            $request['image'] = $this->UploadImg();
            $food = [
                "name"=> $request['name'],
                "image"=>$request['image']
            ];
            $this->storeModel->addFood($food, $store);
            header("location:index.php?page=list");
        }
    }


    public function UploadImg($name = "default.png")
    {
        $target_dir = "uploads/";
        $target_file = $target_dir . time() . basename($_FILES["image"]["name"]);
        $default = $target_dir . $name;
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            return $target_file;
        } else {
            return $default;
        }
    }
}