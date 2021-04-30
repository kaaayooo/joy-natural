<?php

include "../classes/product.php";

$prod_obj= new Product;
$product_list = $prod_obj->getAllProducts();
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
<title>Add Product</title>
</head>
<body>

<div class="container mt-3">
  <div class="my-3 text-right">
    <a href="../actions/logout.php" class="btn btn-outline-danger border-0 d-inline-block">Log out</a>
  </div>
  <div class="row">
    <div class="col-5">
      <div class="card">
        <div class="card-header text-center bg-light">
          <h2>New Product</h2>
        </div>
        <div class="card-body">
          <form action="../actions/product.php" method="post" enctype="multipart/form-data">
            <label for="prod_name">Product Name</label>
            <input type="text" name="prod_name" id="prod_name" class="form-control" required>

            <label for="price" class="mt-3">Price</label>
            <input type="number" name="price" id="price"  class="form-control" required>
          
            <label for="season_id" class="mt-3" >Season</label>
            <select name="season_id" id="season_id" class="form-control" required>
              <option value="1">Spring</option>
              <option value="2">Summer</option>
              <option value="3">Fall</option>
              <option value="4">Winter</option>
            </select>
            <label class="mt-4">Photo</label>
            <div class="custom-file">
              <label for="photo" class="custom-file-label">Choose Photo</label>
              <input type="file" name="photo" id="photo" class="custom-file-input" required>
            </div>
            
            <button type="submit" name="add_product" class="btn btn-outline-info btn-block mt-5">Add Product</button>        
          </form>
        </div>
      </div>
    </div>

 <!-- display   -->
    <div class="col-7">
      <table class="table table-hover">
        <thead class="bg-info">
          <tr>
            <th>Product ID</th>
            <th>Photo</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Season</th> 
            <th></th>           
            <th></th>           
          </tr>
        </thead>
        <tbody>
          <?php
            while($product = $product_list->fetch_assoc()){      
          ?>

          <tr>
            <td><?= $product['prod_id'] ?></td>
            <td> <img src="../images/<?= $product['photo']?>" alt="product photo" height="70px" width="100px"></td>
            <td><?= $product['prod_name'] ?></td>
            <td><?= $product['price'] ?></td>
            <td><?= $product['season_name'] ?></td>
            <td>
              <a href="editProduct.php?prod_id=<?=$product['prod_id']?>" class="btn btn-outline-primary btn-block">
              Edit
              </a>  
            </td>           
            
    <!-- delete file name         -->
            <td>      
              <a href="../actions/deleteProduct.php?prod_id=<?=$product['prod_id'] ?> " class="btn btn-outline-danger">
              Delete
              </a>                   
            </td>
          </tr> 
          <?php } ?> 
        </tbody> 
      </table>

    </div>

  
  </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>