<?php

include "db.php";

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$role = $_POST['role']; // farmer or admin

if($role == "admin"){

$sql = "INSERT INTO admins (full_name,email,password)
VALUES ('$full_name','$email','$password')";

}else{

$phone = $_POST['phone'];
$location = $_POST['location'];
$crop_type = $_POST['crop_type'];

$sql = "INSERT INTO farmers
(full_name,email,phone,location,crop_type,password)
VALUES
('$full_name','$email','$phone','$location','$crop_type','$password')";

}

if(mysqli_query($conn,$sql)){
header("Location: ../login.php");
}else{
echo "Registration failed";
}

?>