<?php
include "../classes/product.php";

session_start();

$prod_obj = new Product;
$product_list = $prod_obj->getProduct($_GET['prod_id']);
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
<title>Edit Product</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light">
    <a href="main.php" class="navbar-brand">
      <h1>Joy Natural</h1>
    </a>
    <div class="ml-auto">
      <ul class="navbar-nav">
        <li class="nav-item"><a href="../views/ourProduct.php" class="nav-link">Our Product</a> </li>
        <li class="nav-item"><a href="#" class="nav-link">Hello <?= $_SESSION['first_name'] ?>!</a></li>
        <li class="nav-item"><a href="../actions/logout.php" class="nav-link">Log out</a></li>
      </ul>
    </div>
  </nav>   

<div class="container mt-3">
  <div class="row">
    <div class="col-5">
      <div class="card">
        <div class="card-header text-center bg-light">
          <h2>Edit Product</h2>
        </div>
        <div class="card-body">
          <form action="../actions/editProduct.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="prod_id" value="<?=$product_list['prod_id']?>">
            <label for="prod_name">Product Name</label>
            <input type="text" name="prod_name" id="prod_name" class="form-control" value="<?=$product_list['prod_name']?>" required>

            <label for="price" class="mt-3">Price</label>
            <input type="number" name="price" id="price"  class="form-control" value="<?=$product_list['price']?>" required>
          
            <label for="season_id" class="mt-3" >Season</label>
            <select name="season_id" id="season_id" class="form-control" required>
              <option value="1">Spring</option>
              <option value="2">Summer</option>
              <option value="3">Fall</option>
              <option value="4">Winter</option>
            </select>
            <label for="choosephoto" class="mt-4">Photo</label>
            <div class="custom-file mt-2">
              <label for="photo" class="custom-file-label" >Choose Photo</label>
              <input type="file" name="photo" id="photo" class="form-control-file" required>
            </div>
            
            <button type="submit" name="add_product" class="btn btn-outline-info btn-block mt-5">Save Changes</button>       
            <a href="product.php" class="btn btn-outline-secondary btn-block mt-3">Cancel</a>
          </form>
        </div>
      </div>
    </div>


  </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>