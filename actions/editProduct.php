<?php

include "../classes/product.php";

$prod_id = $_POST['prod_id'];
$image_name = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$prod_name = $_POST['prod_name'];
$price = $_POST['price'];
$season_id = $_POST['season_id'];


$product_obj = new Product;
$product_obj->updateProduct($prod_id,$image_name,$tmp_name,$prod_name,$price,$season_id)




?>