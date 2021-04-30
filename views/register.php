

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
<title>Register</title>
</head>
<body>

<div class="container w-50 my-5">
  <div class="card">
    <div class="card-header bg-light">
          <h1>Register</h1>
          <p class="mt-3 text-muted">If you don't have a account, please fill out your information.<p>
          <p class="text-muted">If you have your account,  
          <a href="../views/login.php">go to Login</a>
          <p>
        </div>

        <div class="card-body ">
          <form action="../actions/customer.php" method="post">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control" required>

            <label for="last_name" class="mt-3">Last Name</label>
            <input type="text" name="last_name" id="last_name"  class="form-control" required>

            <label for="address" class="mt-3" >Address</label>
            <input type="text" name="address" id="address"  class="form-control" required>

            <label for="phone" class="mt-3" >Phone Number</label>
            <input type="text" name="phone" id="phone"  class="form-control" required>
          
            <label for="email" class="mt-3" >Email</label>
            <input type="text" name="email" id="email"  class="form-control" required>

            <label for="password" class="mt-3" >Password</label>
            <input type="password" name="password" id="password"  class="form-control" required>
            
            
            <button type="submit" name="register" class="btn btn-outline-info btn-block mt-5">Register</button>  
               
          </form>
        </div>
      </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>