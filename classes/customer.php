<?php

require_once "database.php";

class Customer extends Database {

  public function createCustomers($first_name,$last_name,$address,$phone,$email,$password){
    $sql = "INSERT INTO `customers` (`first_name`,`last_name`,`address`,`phone_no`,`email`,`password`) VALUES ('$first_name','$last_name','$address','$phone','$email','$password')";

    if($this->conn->query($sql)){
      session_start();
      
      $_SESSION['customer_id'] = $this->conn->insert_id;
      $_SESSION['first_name'] = $first_name;
      $_SESSION['email'] = $email;

      header("location:../views/main.php");  
      exit;  
    }else{
      die("error creating customer: ".$this->conn->error);
    }
  }  

// Login  
  public function login($email,$password){
    $sql = "SELECT customer_id, first_name, email, `password` FROM customers WHERE email = '$email'";

    $result = $this->conn->query($sql);
    if($result->num_rows == 1){
      $customer_details = $result->fetch_assoc();
      if(password_verify($password, $customer_details['password'])){

        session_start();
      
        $_SESSION['customer_id'] = $customer_details['customer_id'];
        $_SESSION['first_name'] = $customer_details['first_name'];
        $_SESSION['email'] = $customer_details['email'];

  // ログイン後のFile name 入れる
        if($email == "kayo@mail.com"){
          header("location: ../views/product.php");
          exit;
        } else {
          header("location: ../views/main.php");
          exit;
        }

      }else{
        die ("password is incorrect");
      }
    }
  }
}
?>