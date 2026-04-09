<?php

session_start();
include "backend/db.php";

/* PROTECT ADMIN */
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

/* HANDLE FORM */
if (isset($_POST['submit'])) {

<<<<<<< HEAD
    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $read_time = $_POST['read_time'];

    /* IMAGE UPLOAD */
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
=======
    $title       = $_POST['title'];
    $category    = $_POST['category'];
    $description = $_POST['description'];
    $read_time   = $_POST['read_time'];

    /* IMAGE UPLOAD */
    $image = $_FILES['image']['name'];
    $tmp   = $_FILES['image']['tmp_name'];
>>>>>>> 96612d8cce30dbf8670ac595521cbaedbe8b33f7

    move_uploaded_file($tmp, "images/" . $image);

    /* INSERT INTO DATABASE */
    $sql = "INSERT INTO advisories
            (title, category, description, image, read_time)
            VALUES
            ('$title', '$category', '$description', '$image', '$read_time')";

    mysqli_query($conn, $sql);

    echo "Advisory Published Successfully";
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Publish Advisory</title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>

    <h2>Publish Advisory</h2>

    <form method="POST" enctype="multipart/form-data">

<<<<<<< HEAD
        <input
            name="title"
            placeholder="Advisory Title"
            required
        >
        <br><br>

        <select name="category" required>

            <option value="">Select Category</option>
            <option value="Pest Management">Pest Management</option>
            <option value="Soil Health">Soil Health</option>
            <option value="Techniques">Techniques</option>

        </select>
        <br><br>

        <textarea
            name="description"
            placeholder="Description"
            required
        ></textarea>
        <br><br>

        <input
            name="read_time"
            placeholder="e.g 5 min read"
            required
        >
        <br><br>

        <input
            type="file"
            name="image"
            required
        >
        <br><br>

        <button name="submit">
            Publish Advisory
        </button>

=======
        <input name="title" placeholder="Advisory Title" required><br><br>

        <select name="category" required>
            <option value="">Select Category</option>
            <option value="Pest Management">Pest Management</option>
            <option value="Soil Health">Soil Health</option>
            <option value="Techniques">Techniques</option>
        </select><br><br>

        <textarea name="description" placeholder="Description" required></textarea><br><br>

        <input name="read_time" placeholder="e.g 5 min read" required><br><br>

        <input type="file" name="image" required><br><br>

        <button name="submit">Publish Advisory</button>

>>>>>>> 96612d8cce30dbf8670ac595521cbaedbe8b33f7
    </form>

</body>
</html>