<?php

  require_once "database.php";

class Product extends Database{

  public function createProduct($prod_name,$price,$season_id,$image_name,$tmp_name){
    $sql = "INSERT INTO products(`prod_name`,`price`,`season_id`,`photo`) VALUES('$prod_name','$price','$season_id','$image_name')";

    if($this->conn->query($sql)){
      $destination = "../images/".basename($image_name);

      if(move_uploaded_file($tmp_name,$destination)){
        header("location:../views/product.php");  
        exit;
      }
    }else{
      die("error creating product: ".$this->conn->error);     
    }
  }

  public function getAllProducts(){
    $sql = "SELECT * FROM products INNER JOIN seasons ON products.season_id = seasons.season_id";
    if($result = $this->conn->query($sql)){
      return $result;
    }else{
      die("error retrieving products: ".$this->conn->error);
    }
  }  

  public function getProduct($prod_id){
    $sql = "SELECT * FROM products INNER JOIN seasons ON products.season_id = seasons.season_id WHERE prod_id = $prod_id ";
    if($result = $this->conn->query($sql)){
      return $result->fetch_assoc();
    }else{
      die("error retrieving products: ".$this->conn->error);
    }
  }
  
  public function getProductsSpring(){
    $sql = "SELECT * FROM products INNER JOIN seasons ON products.season_id = seasons.season_id WHERE products.season_id = 1 ";
    if($result = $this->conn->query($sql)){
      return $result;
    }else{
      die("error retrieving Spring products: ".$this->conn->error);
    }
  }

  public function getProductsSummer(){
    $sql = "SELECT * FROM products INNER JOIN seasons ON products.season_id = seasons.season_id WHERE products.season_id = 2 ";
    if($result = $this->conn->query($sql)){
      return $result;
    }else{
      die("error retrieving Summer products: ".$this->conn->error);
    }
  }

  public function getProductsFall(){
    $sql = "SELECT * FROM products INNER JOIN seasons ON products.season_id = seasons.season_id WHERE products.season_id = 3 ";
    if($result = $this->conn->query($sql)){
      return $result;
    }else{
      die("error retrieving Fall products: ".$this->conn->error);
    }
  }

  public function getProductsWinter(){
    $sql = "SELECT * FROM products INNER JOIN seasons ON products.season_id = seasons.season_id WHERE products.season_id = 4 ";
    if($result = $this->conn->query($sql)){
      return $result;
    }else{
      die("error retrieving Winter products: ".$this->conn->error);
    }
  }

  public function updateProduct($prod_id,$image_name,$tmp_name,$prod_name,$price,$season_id){
    $sql = "UPDATE products SET photo = '$image_name',  prod_name = '$prod_name',price = '$price',season_id = '$season_id' WHERE prod_id = $prod_id ";

    if($this->conn->query($sql)){
      $destination = "../images/".basename($image_name);
      if(move_uploaded_file($tmp_name,$destination)){
        header("location: ../views/product.php");
        exit;
      }else{
        die("error updating users: ".$this->conn->error);
      }  
    }
  } 

  public function deleteProduct($prod_id){
    $sql = "DELETE FROM products WHERE prod_id = '$prod_id'";
    if($this->conn->query($sql)){
      header("location: ../views/product.php");
      exit;
    }else{
      die("error deleting users: ".$this->conn->error);
    }

  }

















}  


?>

