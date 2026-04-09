<?php
session_start();
include("db.php");

$farmer_id = $_SESSION['farmer_id'];
$other_user = $_GET['user_id'];

$query = "SELECT * FROM messages 
          WHERE 
          (sender_id='$farmer_id' AND receiver_id='$other_user') OR
          (sender_id='$other_user' AND receiver_id='$farmer_id')
          ORDER BY created_at ASC";

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {

    if ($row['sender_id'] == $farmer_id) {
        echo "<div class='message sent'>
                <p>{$row['message']}</p>
                <span>{$row['created_at']}</span>
              </div>";
    } else {
        echo "<div class='message received'>
                <p>{$row['message']}</p>
                <span>{$row['created_at']}</span>
              </div>";
    }
}
?>