<?php
include 'App/View/layout/navbar.php';
?>
<div>
    <div class="row">

        <div class="col-8">
            <div class="row">
                <?php foreach ($foods as $food): ?>
                    <div class="col-4">
                        <div class="card" style="width: 100%;">
                            <img src="<?php echo $food->image ?>" class="card-img-top" alt="<?php echo $food->image ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $food->name ?></h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="index.php?page=add-to-cart&food-id=<?php echo $food->id ?>"
                                   class="btn btn-primary">ADD TO CART</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="col-4">
            <div class="card" style="width: 100%;">
                <div class="card-header">
                    Cart
                </div>
                <ul class="list-group list-group-flush">
                    <?php foreach ($cart as $food): ?>
                        <li class="list-group-item"><?php echo $food->name ?></li>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
    </div>
</div>

