<?php
 
include "../classes/product.php";

$product = new Product;
$spring_list = $product->getProductsSpring();
$summer_list = $product->getProductsSummer();
$fall_list = $product->getProductsFall();
$winter_list = $product->getProductsWinter();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Our Products</title>
</head>
<body>


  <main class="container my-5">
    <div class="mb-4">
      <h2 class="h3">SPRING</h2>
      <div class="row">
        <?php
        while($spring = $spring_list->fetch_assoc()){
        ?>
        <div class="col-3">
          <a href="item.php?prod_id=<?= $spring['prod_id'] ?>" class="text-dark text-decoration-none">
            <img src="../images/<?= $spring['photo'] ?>" alt="" class="image-fluid">
            <p class="font-weight-bold lead"><?= $spring['prod_name'] ?></p>
            <p class="lead">Price: ¥<?= $spring['price'] ?></p>
          </a>
        </div>
        <?php
        }
        ?>
      </div>
    </div>

    <div class="mb-4">
      <h2 class="h3">SUMMER</h2>
      <div class="row">
        <?php
        while($summer = $summer_list->fetch_assoc()){
        ?>
        <div class="col-3">
          <img src="../images/<?= $summer['photo'] ?>" alt="" class="image-fluid">
          <p class="font-weight-bold lead"><?= $summer['prod_name'] ?></p>
          <p class="lead">Price: ¥<?= $summer['price'] ?></p>
        </div>
        <?php
        }
        ?>
      </div>
    </div>

    <div class="mb-4">
      <h2 class="h3">FALL</h2>
      <div class="row">
        <?php
        while($fall = $fall_list->fetch_assoc()){
        ?>
        <div class="col-3">
          <img src="../images/<?= $fall['photo'] ?>" alt="" class="image-fluid">
          <p class="font-weight-bold lead"><?= $fall['prod_name'] ?></p>
          <p class="lead">Price: ¥<?= $fall['price'] ?></p>
        </div>
        <?php
        }
        ?>
      </div>
    </div>

    <div class="mb-4">
      <h2 class="h3">WINTER</h2>
      <div class="row">
        <?php
        while($winter = $winter_list->fetch_assoc()){
        ?>
        <div class="col-3">
          <img src="../images/<?= $winter['photo'] ?>" alt="" class="image-fluid">
          <p class="font-weight-bold lead"><?= $winter['prod_name'] ?></p>
          <p class="lead">Price: ¥<?= $winter['price'] ?></p>
        </div>
        <?php
        }
        ?>
      </div>
    </div>



  </main>




    





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>