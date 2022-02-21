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
}