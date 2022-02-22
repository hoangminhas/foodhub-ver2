<?php
?>
<div class="container" style="background-color: rgba(150,179,232,0.72)">
    <h2>Add Food</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Food Name</label>
            <input type="text" name="name" class="form-control"  placeholder="food name">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Image</label>
            <input type="file" name="image">
        </div>
        <button type="submit" class="btn btn-success"">Send</button>
    </form>
</div>