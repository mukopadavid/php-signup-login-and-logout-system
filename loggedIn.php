<?php

session_start();

if(empty($_SESSION['id']) || empty($_SESSION['name']) || empty($_SESSION['loggedAt'])){
header('location:login.php');
}

if(time() - $_SESSION['loggedAt'] > 60){

header('location:logout.php');

}else{
    $_SESSION['loggedAt'] = time();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/loggedin.css">
    <title>LOGGED IN</title>
</head>
<body>
    <div class="container">
     <h1 class="text-center d-inline title">Welcome <?php echo $_SESSION['name']  ?></h1><a href="logout.php" class="btn btn-danger float-right">Logout</a>
    </div>
</body>
</html>