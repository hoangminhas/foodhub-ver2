<?php

use App\Constant;

if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
} else {
    header("location:index.php?page=login");
}
?>
<div class="mb-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <?php if ($user->role_id == Constant::ADMIN): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">User List</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <?php if ($user->role_id == Constant::USER): ?>

                <li class="nav-item">
                    <a class="nav-link">Cart(0)</a>
                </li>
                <?php endif;?>
            </ul>
            <!--            <form class="form-inline my-2 my-lg-0">-->
            <!--                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
            <!--                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
            <!--            </form>-->
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-expanded="false">
                    <?php echo $user->name ?? "" ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php if ($user->role_id == Constant::STORE): ?>
                        <a class="dropdown-item" href="#">My Store</a>
                    <?php endif; ?>
                    <?php if ($user->role_id == Constant::USER): ?>
                        <a class="dropdown-item" href="#">My Order</a>
                    <?php endif; ?>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.php?page=logout">Logout</a>
                </div>
            </div>
        </div>
    </nav>
</div>
