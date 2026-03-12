<?php

include "db.php";

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$crop_type = $_POST['crop_type'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$role = $_POST['role'];

$sql = "INSERT INTO users
(full_name,email,phone,location,crop_type,password,role)
VALUES
('$full_name','$email','$phone','$location','$crop_type','$password','$role')";

if(mysqli_query($conn,$sql)){

header("Location: ../login.php");

}else{

echo "Registration failed";

}

?>