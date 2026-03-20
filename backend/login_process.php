<?php

session_start();
include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];

/* CHECK ADMIN FIRST */

$admin_query = mysqli_query($conn, "SELECT * FROM admins WHERE email='$email'");

if(mysqli_num_rows($admin_query) > 0){

$admin = mysqli_fetch_assoc($admin_query);

if(password_verify($password,$admin['password'])){

$_SESSION['admin_id'] = $admin['id'];
$_SESSION['admin_name'] = $admin['full_name'];

header("Location: ../admin-dashboard.php");
exit();

}

}

/* CHECK FARMER */

$farmer_query = mysqli_query($conn, "SELECT * FROM farmers WHERE email='$email'");

if(mysqli_num_rows($farmer_query) > 0){

$farmer = mysqli_fetch_assoc($farmer_query);

if(password_verify($password,$farmer['password'])){

$_SESSION['farmer_id'] = $farmer['id'];
$_SESSION['farmer_name'] = $farmer['full_name'];

header("Location: ../farmer-dashboard.php");
exit();

}

}

echo "Invalid email or password";

?>