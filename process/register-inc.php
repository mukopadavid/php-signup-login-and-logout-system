<?php

require_once('../db/connection.php');


if(!empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['password'])){

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT username FROM users WHERE username = ?";
$stmt = mysqli_stmt_init($conn);

if(mysqli_stmt_prepare($stmt,$sql)){
mysqli_stmt_bind_param($stmt, 's', $username);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);

if(mysqli_stmt_num_rows($stmt) > 0){
    
echo "
<script>
alert('Username is already registered')
location.assign('../register.php')
</script>
";

}else{

$sql = "INSERT INTO users (name, username, password) VALUES (?,?,?)";
if(mysqli_stmt_prepare($stmt,$sql)){
    
$hashedpass = password_hash($password, PASSWORD_DEFAULT);
mysqli_stmt_bind_param($stmt, 'sss', $name, $username, $hashedpass);

if(mysqli_stmt_execute($stmt)){

echo "
<script>
alert('Registration successfull')
location.assign('../login.php')
</script>
";

}else{

echo "
<script>
alert('an error occured')
location.assign('../register.php')
</script>
";

}
}else{

echo "
<script>
alert('an error occured')
location.assign('../register.php')
</script>
";

}
}
}else{

echo "
<script>
alert('an error occured')
location.assign('../register.php')
</script>
";

}
}