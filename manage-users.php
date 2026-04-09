<?php

session_start();
include "backend/db.php";

/* OPTIONAL: PROTECT ADMIN */
if (!isset($_SESSION['admin_id'])) {
<<<<<<< HEAD
    // remove this if you don't have admin session yet
=======
>>>>>>> 96612d8cce30dbf8670ac595521cbaedbe8b33f7
    // header("Location: login.php");
    // exit();
}

$result = mysqli_query($conn, "SELECT * FROM farmers");

?>

<!DOCTYPE html>
<html>

<head>
    <title>Manage Farmers</title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>

    <h2>All Farmers</h2>

    <table border="1" cellpadding="10">

<<<<<<< HEAD
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>

            <tr>

                <td><?php echo $row['id']; ?></td>

                <td><?php echo $row['full_name']; ?></td>

                <td><?php echo $row['email']; ?></td>

                <td>
                    <a
                        href="delete-user.php?id=<?php echo $row['id']; ?>"
                        onclick="return confirm('Are you sure you want to delete this user?')"
                    >
                        Delete
                    </a>
                </td>

            </tr>

        <?php } ?>

    </table>
=======
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>

        <tr>

            <td><?php echo $row['id']; ?></td>

            <td><?php echo $row['full_name']; ?></td>

            <td><?php echo $row['email']; ?></td>

            <td>
                <a href="delete-user.php?id=<?php echo $row['id']; ?>"
                   onclick="return confirm('Are you sure you want to delete this user?')">
                    Delete
                </a>
            </td>

        </tr>

    <?php } ?>

</table>
>>>>>>> 96612d8cce30dbf8670ac595521cbaedbe8b33f7

</body>
</html>