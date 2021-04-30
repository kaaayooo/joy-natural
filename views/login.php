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
<title>Login</title>
</head>
<body>

<div class="container w-50 mt-5">
      <div class="card">
        <div class="card-header text-center bg-light">
          <h2>Login</h2>
        </div>
        <div class="card-body">

<!-- Put in action  -->
          <form action="../actions/login.php" method="post" >
            
            <label for="email" class="mt-3" >Email</label>
            <input type="text" name="email" id="email"  class="form-control" required>

            <label for="password" class="mt-3" >Password</label>
            <input type="password" name="password" id="password"  class="form-control" required>            
              
            <button type="submit" name="register" class="btn btn-outline-info btn-block mt-5">Login</button>
          </form>
          <a href="register.php" class="small text-center mt-3 d-block">Create Account</a>
      </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>