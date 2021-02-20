<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>REGISTER</title>
</head>
<body>
    <div class="container">
        <div class="col-lg-6 m-auto">
           <div class="card">
              <div class="card-header bg-success">
                <h1>Register</h1>
              </div> 
              <div class="card-body">
                <form action="./process/register-inc.php" method="post">
                  <div class="form-group">
                     <label for="name">Name</label>
                     <input type="text" name="name" id="name" class="form-control" required> 
                  </div>
                  <div class="form-group">
                     <label for="username">Username</label>
                     <input type="text" name="username" id="username" class="form-control" required> 
                  </div>
                  <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" name="password" id="password" class="form-control" required> 
                  </div>
                  <button type="submit" class="btn btn-primary">Register User</button>

                  <div class="mt-3">Already have an account? <a href="login.php">login</a></div>
                  <div class="mt-3">
                      <a href="index.php">BACK TO HOME</a>
                  </div>
                </form>  
              </div>
           </div> 
        </div>
    </div>
</body>
</html>