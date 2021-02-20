<?php

session_start();

require_once('../db/connection.php');


if(!empty($_POST['username']) && !empty($_POST['password'])){

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM users WHERE username = ?";
$stmt = mysqli_stmt_init($conn);

if(mysqli_stmt_prepare($stmt,$sql)){

mysqli_stmt_bind_param($stmt, 's', $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);


if(!$row){

echo "
<script>
alert('Username is not registered')
location.assign('../login.php')
</script>
";

}else{

if(password_verify($password, $row['password'])){

$_SESSION['id'] = $row['id'];
$_SESSION['name'] = $row['name'];
$_SESSION['loggedAt'] = time();

header('location:../loggedIn.php');

}else{

echo "
<script>
alert('Username and password did not match')
location.assign('../login.php?err={$username}')
</script>
";

}

}

}else{

echo "
<script>
alert('an error occured')
location.assign('../login.php')
</script>
";

}
    
}