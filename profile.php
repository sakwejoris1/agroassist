<?php
session_start();
include("backend/db.php");

if (!isset($_SESSION['farmer_id'])) {
    header("Location: login.php");
    exit();
}

$farmer_id = $_SESSION['farmer_id'];

$query = mysqli_query($conn, "SELECT * FROM farmers WHERE id='$farmer_id'");
$user = mysqli_fetch_assoc($query);

$image = !empty($user['profile_image']) ? $user['profile_image'] : 'default.png';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="css/profile.css">
</head>

<body>

<div class="profile-container">

    <h2>My Profile</h2>

    <!-- PROFILE IMAGE -->
    <div class="profile-image">
        <img src="uploads/<?php echo $image; ?>" alt="Profile Image">
    </div>

    <form action="backend/update-profile.php" method="POST" enctype="multipart/form-data">

        <label>Change Profile Picture</label>
        <input type="file" name="profile_image">

        <label>Full Name</label>
        <input type="text" name="full_name" value="<?php echo $user['full_name']; ?>" required>

        <label>Email</label>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required>

        <label>Phone</label>
        <input type="text" name="phone" value="<?php echo $user['phone']; ?>">

        <label>Location</label>
        <input type="text" name="location" value="<?php echo $user['location']; ?>">

        <label>Crop Type</label>
        <input type="text" name="crop_type" value="<?php echo $user['crop_type']; ?>">

        <button type="submit">Update Profile</button>

    </form>

</div>

</body>
</html>