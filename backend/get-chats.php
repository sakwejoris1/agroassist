<?php
session_start();
include("db.php");

$farmer_id = $_SESSION['farmer_id'];

// Get users you've chatted with
$query = "SELECT DISTINCT 
            CASE 
                WHEN sender_id = '$farmer_id' THEN receiver_id
                ELSE sender_id
            END AS user_id
          FROM messages
          WHERE sender_id = '$farmer_id' OR receiver_id = '$farmer_id'";

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {

    $user_id = $row['user_id'];

    $user = mysqli_fetch_assoc(mysqli_query($conn,
        "SELECT full_name FROM farmers WHERE id='$user_id'"
    ));

    echo "<div class='chat-item' onclick=\"openChat('$user_id','{$user['full_name']}')\">
            {$user['full_name']}
          </div>";
}
?>