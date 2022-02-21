<?php
include 'App/View/layout/navbar.php';
?>
<div>
    <div class="row">
        <div class="col-4">
            <div class="card" style="width: 100%;">
                <img src="<?php echo $store->image ?? "" ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $store->name ?? "" ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="row">
                <?php foreach ($foods as $food):?>
                <div class="col-4">
                    <div class="card" style="width: 100%;">
                        <img src="<?php echo $food->image?>" class="card-img-top" alt="<?php echo $food->image?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $food->name?></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>

