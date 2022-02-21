<?php

namespace App\Controller;

use App\Model\FoodModel;
use App\Model\StoreModel;

class UserController
{
    public $storeModel;
    public $foodModel;
    public function __construct()
    {
        $this->storeModel = new StoreModel();
        $this->foodModel = new FoodModel();
    }

    public function home()
    {

        $user = $_SESSION["user"];
//        var_dump($user);
//        die();
        $stores = $this->storeModel->getAll();
        $foods = $this->foodModel->getAll();
        $cartName = "cart_".$_SESSION["user"]->email;
        $cart = $_SESSION[$cartName] ?? [];
        include_once "App/View/home/index.php";
    }

    public function addToCart($foodId)
    {
        $cartName = "cart_".$_SESSION["user"]->email;
        $cart = $_SESSION[$cartName] ?? [];
        $cart[$foodId] = $this->foodModel->getById($foodId);
        $_SESSION[$cartName] = $cart;
        header("location:index.php?page=home");
    }
}