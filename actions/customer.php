<?php

include "../classes/customer.php";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);

$prod_obj = new Customer;

$prod_obj->createCustomers($first_name,$last_name,$address,$phone,$email,$password);


?>