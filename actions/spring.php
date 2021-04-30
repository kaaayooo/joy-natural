<?php

include "../classes/product.php";

$prod_id = $_POST['prod_id'];
$prod_name = $_POST['prod_name'];
$price = $_POST['price'];
$image_name = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];


$product_list = new Product;

$prod_list->getProductsSpring($prod_id,$prod_name,$image_name,$tmp_name,$price);


?>