<?php

include "backend/db.php";

if(isset($_POST['submit'])){

$crop = $_POST['crop_name'];
$location = $_POST['market_location'];
$price = $_POST['price'];
$unit = $_POST['unit'];
$change = $_POST['price_change'];
$updated = $_POST['last_updated'];

$sql = "INSERT INTO market_rates
(crop_name,market_location,price,unit,price_change,last_updated)
VALUES
('$crop','$location','$price','$unit','$change','$updated')";

mysqli_query($conn,$sql);

echo "Price Added Successfully";

}

?>

<!DOCTYPE html>
<html>

<head>
<title>Add Market Prices</title>
<link rel="stylesheet" href="css/admin.css">
</head>

<body>

<h2>Add Market Price</h2>

<form method="POST">

<input name="crop_name" placeholder="Crop Name" required><br><br>

<input name="market_location" placeholder="Market Location" required><br><br>

<input name="price" placeholder="Price" required><br><br>

<input name="unit" placeholder="Unit (e.g per kg)" required><br><br>

<input name="price_change" placeholder="+2.4% or -1.2%" required><br><br>

<input name="last_updated" placeholder="e.g 15 mins ago" required><br><br>

<button name="submit">Add Price</button>

</form>

</body>

</html>