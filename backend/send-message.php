<?php
session_start();
include("db.php");

$sender_id = $_SESSION['farmer_id'];
$receiver_id = $_POST['receiver_id'];
$message = mysqli_real_escape_string($conn, $_POST['message']);

if (!empty($message)) {
    mysqli_query($conn, "INSERT INTO messages 
        (sender_id, receiver_id, message)
        VALUES ('$sender_id', '$receiver_id', '$message')");
}
?>