<?php
include "../classes/product.php";

session_start();

$prod_obj = new Product;
$product_details = $prod_obj->getProduct($_GET['prod_id']);
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
<title>View Product</title>
</head>
<body>

<main class="container my-5">
  <div class="row">
    <div class="col-7">
      <img src="../images/<?= $product_details['photo'] ?>" alt="<?= $product_details['prod_name'] ?>" class="img-fluid">
    </div>
    <div class="col-5">
      <p class="font-weight-bold lead mb-0">NAME</p>
      <p class="mb-3"><?= $product_details['prod_name'] ?></p>
      <p class="font-weight-bold lead mb-0">PRICE</p>
      <p class="mb-3"><?= $product_details['price'] ?></p>
      <p class="font-weight-bold lead mb-0">SEASON</p>
      <p class="mb-3"><?= $product_details['season_name'] ?></p>

      <form action="#" method="post">
        <p class="font-weight-bold lead mb-0">QUANTITY</p>
        <input type="number" name="quantity" id="quantity" class="form-control" max="10">

      <button type="submit" class="btn btn-block btn-primary mt-5">ADD TO CART</button>

      </form>
    </div>
  </div>
</main>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>