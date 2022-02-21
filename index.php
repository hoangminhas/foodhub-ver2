<?php
session_start();
use App\Controller\AuthController;
use App\Controller\StoreController;
use App\Controller\UserController;

require __DIR__. "/vendor/autoload.php";

$authController = new AuthController();
$storeController = new StoreController();
$userController = new UserController();
$page = $_GET['page']??"";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<div class="container">

<?php
switch ($page) {
    case "login":
        if($_SERVER["REQUEST_METHOD"] == "GET")
            $authController->showForm();
        else
            $authController->login($_POST);
        break;
    case "store-list":
        $storeController->showAll();
        break;
    case "home":
        $userController->home();
        break;
    case "add-to-cart":
        $userController->addToCart($_GET["food-id"]);
        break;

    case "logout":
        $authController->logout();
        break;
    default:
        header("location:index.php?page=login");
}
?>

</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>
