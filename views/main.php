<?php
session_start();
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
<link rel="stylesheet" href="../css/main.css">
<title>Main</title>
</head>
<body>

  <nav class="navbar navbar-expand-md navbar-light">
    <a href="main.php" class="navbar-brand">
      <h1>Joy Natural</h1>
    </a>
    <div class="ml-auto">
      <ul class="navbar-nav">
        <li class="nav-item"><a href="#" class="nav-link">Hello <?= $_SESSION['first_name'] ?>!</a></li>
        <li class="nav-item"><a href="../views/ourProduct.php" class="nav-link">Our Product</a> </li>
        <li class="nav-item"><a href="../views/login.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="../actions/logout.php" class="nav-link">Log out</a></li>
      </ul>
    </div>
  </nav>    

  <header>
    <div class="header-text text-center">
      <h2 class="text-light h1">Fresh From The Farm</h2>
      <a href="ourProducts.php" class="btn btn-light">Our Products</a>
    </div>
  </header>

  <main>
    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col-3">
          <div class="itemSpr mx-auto my-auto ">
            <a href="spring.php" class="text-light">Spring</a>
          </div>
        </div>  
        <div class="col-3">
          <div class="itemSum mx-auto my-auto">
            <a href="#" class="text-light">Summer</a>
          </div>
        </div> 
        <div class="col-3"> 
          <div class="itemFal mx-auto my-auto">   
            <a href="#" class="text-light">Fall</a>
          </div>
        </div>    
        <div class="col-3">
          <div class="itemWin mx-auto my-auto">
            <a href="#" class="text-light">Winter</a>
          </div>
        </div>
      </div>
    </div>
  </main>











<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>