<?php

  include "../classes/product.php";


$prod_name = $_POST['prod_name'];
$price = $_POST['price'];
$season_id = $_POST['season_id'];
$image_name = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];


$product = new Product;

$product->createProduct($prod_name,$price,$season_id,$image_name,$tmp_name)



?>