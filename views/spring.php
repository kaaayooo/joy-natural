<?php

include "../classes/customer.php";

$product = new Product;
$product_list = $product->getProductSpring($_GET['prod_id']);

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
<title>Spring</title>
</head>
<body>

  <h3 class=" mt-5">Spring</h3>
    <table class="table table-hover mx-auto w-75" >
      <thead class="bg-info">
        <tr>
          <th>Product ID</th>
          <th>Photo</th>
          <th>Product Name</th>
          <th>Price</th>
          <th>How many</th>                     
        </tr>
      </thead>
      <tbody>
        
        <tr>
          <td><?= $product_list['prod_id'] ?></td>
          <td><img src="../images/<?= $product_list['photo']?>" alt="product photo" height="70px" width="100px"></td>
          <td><?= $product_list['prod_name'] ?></td>
          <td><?= $product_list['price'] ?></td>
          <td>
            <input type="number" name="number" id="number">
          </td>
        </tr>   
      </tbody>

      

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>