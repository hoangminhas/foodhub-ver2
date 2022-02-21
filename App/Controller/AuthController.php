<?php

namespace App\Controller;

use App\Constant;
use App\Model\UserModel;

class AuthController
{

    public $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function showForm()
    {
        include "App/View/auth/login.php";

    }

    public function login($request)
    {

        if ($this->userModel->checkLogin($request)) {

            $user = $this->userModel->getByEmail($request["email"]);
            $_SESSION["user"] = $user;
            if($user->role_id == Constant::STORE)
                header("location:index.php?page=store-list");
            elseif ($user->role_id == Constant::USER)
                header("location:index.php?page=home");
        }
    }

    public function logout()
    {
        unset($_SESSION["user"]);
        header("location:index.php?page=login");
    }

}