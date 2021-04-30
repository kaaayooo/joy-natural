<?php

include "../classes/customer.php";

$email = $_POST['email'];
$password = $_POST['password'];


$prod_obj = new Customer;
$prod_obj->login($email,$password);