<?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        die(" Please enter email and password");
    }

    // =========================
    //  CHECK ADMIN
    // =========================
    $admin_query = mysqli_query($conn, 
        "SELECT * FROM admins WHERE email='$email' LIMIT 1"
    );

    if ($admin_query && mysqli_num_rows($admin_query) > 0) {

        $admin = mysqli_fetch_assoc($admin_query);

        if (password_verify($password, $admin['password'])) {

            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_name'] = $admin['full_name'];

            header("Location: ../admin-dashboard.php");
            exit();
        }
    }

    // =========================
    //  CHECK FARMER
    // =========================
    $farmer_query = mysqli_query($conn, 
        "SELECT * FROM farmers WHERE email='$email' LIMIT 1"
    );

    if ($farmer_query && mysqli_num_rows($farmer_query) > 0) {

        $farmer = mysqli_fetch_assoc($farmer_query);

        if (password_verify($password, $farmer['password'])) {

            $_SESSION['farmer_id'] = $farmer['id'];
            $_SESSION['farmer_name'] = $farmer['full_name'];

            header("Location: ../farmer-dashboard.php");
            exit();
        }
    }

    echo " Invalid email or password";

} else {
    echo " Invalid request";
}
?>