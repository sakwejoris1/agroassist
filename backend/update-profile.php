<?php
session_start();
include("db.php");

if (!isset($_SESSION['farmer_id'])) {
    header("Location: ../login.php");
    exit();
}

$farmer_id = $_SESSION['farmer_id'];

$full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$location = mysqli_real_escape_string($conn, $_POST['location']);
$crop_type = mysqli_real_escape_string($conn, $_POST['crop_type']);

// HANDLE IMAGE UPLOAD
$image_name = null;

if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == 0) {

    $file = $_FILES['profile_image'];

    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
    $new_name = time() . "." . $ext;

    move_uploaded_file($file['tmp_name'], "../uploads/" . $new_name);

    $image_name = $new_name;
}

// UPDATE QUERY
if ($image_name) {
    $sql = "UPDATE farmers SET 
            full_name='$full_name',
            email='$email',
            phone='$phone',
            location='$location',
            crop_type='$crop_type',
            profile_image='$image_name'
            WHERE id='$farmer_id'";
} else {
    $sql = "UPDATE farmers SET 
            full_name='$full_name',
            email='$email',
            phone='$phone',
            location='$location',
            crop_type='$crop_type'
            WHERE id='$farmer_id'";
}

if (mysqli_query($conn, $sql)) {
    header("Location: ../profile.php");
    exit();
} else {
    echo "Update failed: " . mysqli_error($conn);
}
?>