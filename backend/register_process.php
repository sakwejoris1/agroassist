<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize inputs
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    // Validate required fields
    if (empty($full_name) || empty($email) || empty($_POST['password'])) {
        die("Please fill all required fields");
    }

    // Check if email already exists
    $check_farmers = mysqli_query($conn, 
        "SELECT email FROM farmers WHERE email='$email'"
    );

    $check_admins = mysqli_query($conn, 
        "SELECT email FROM admins WHERE email='$email'"
    );

    if (mysqli_num_rows($check_farmers) > 0 || mysqli_num_rows($check_admins) > 0) {
        die("Email already registered");
    }

    // Farmer registration
    if ($role == "farmer") {

        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $location = mysqli_real_escape_string($conn, $_POST['location']);
        $crop_type = mysqli_real_escape_string($conn, $_POST['crop_type']);

        if (empty($phone) || empty($location) || empty($crop_type)) {
            die("All farmer fields are required");
        }

        // Manual ID generation
        $getId = mysqli_query($conn, "SELECT MAX(id) AS max_id FROM farmers");
        $row = mysqli_fetch_assoc($getId);
        $new_id = $row['max_id'] + 1;

        $sql = "INSERT INTO farmers 
                (id, full_name, email, phone, location, crop_type, password)
                VALUES 
                ('$new_id', '$full_name', '$email', '$phone', '$location', '$crop_type', '$password')";
    }

    // Admin registration
    else if ($role == "admin") {

        $getId = mysqli_query($conn, "SELECT MAX(id) AS max_id FROM admins");
        $row = mysqli_fetch_assoc($getId);
        $new_id = $row['max_id'] + 1;

        $sql = "INSERT INTO admins 
                (id, full_name, email, password)
                VALUES 
                ('$new_id', '$full_name', '$email', '$password')";
    }

    else {
        die("Invalid role selected");
    }

    // Execute query
    if (mysqli_query($conn, $sql)) {
        header("Location: ../login.php");
        exit();
    } else {
        die("Registration failed: " . mysqli_error($conn));
    }

} else {
    echo "Invalid request";
}
?>