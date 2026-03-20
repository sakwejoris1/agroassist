<?php

include "backend/db.php";

if(isset($_GET['id'])){

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM farmers WHERE id=$id");

header("Location: manage-users.php");
exit();

}else{

echo "No user selected";

}

?>