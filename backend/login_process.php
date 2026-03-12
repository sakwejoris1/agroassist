<?php

session_start();
include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

$user = mysqli_fetch_assoc($result);

if(password_verify($password,$user['password'])){

$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['full_name'];
$_SESSION['role'] = $user['role'];

if($user['role'] == "admin"){

header("Location: ../admin-dashboard.php");

}else{

header("Location: ../farmer-dashboard.php");

}

}else{

echo "Incorrect password";

}

}else{

echo "User not found";

}

?>