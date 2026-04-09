<?php

session_start();

// Check login
if(!isset($_SESSION['farmer_id'])){
    header("Location: login.php");
    exit();
}

//  CONNECT DATABASE
include("backend/db.php");

session_start();

if (!isset($_SESSION['farmer_id'])) {
    header("Location: login.php");
    exit();
}

//  Prevent caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

//  Get session data
$farmer_id = $_SESSION['farmer_id'];
$farmer_name = $_SESSION['farmer_name'];

<<<<<<< HEAD
//  Get unread message count
$countQuery = mysqli_query($conn, 
    "SELECT COUNT(*) as total FROM messages 
     WHERE receiver_id = '$farmer_id' AND status='unread'");

$countData = mysqli_fetch_assoc($countQuery);
$count = $countData['total'];
=======
>>>>>>> 96612d8cce30dbf8670ac595521cbaedbe8b33f7
?>

<!DOCTYPE html>
<html>
<head>
<title>Farmer Dashboard</title>
<link rel="stylesheet" href="../agroassist/css/dashbaord.css">

    <title>Farmer Dashboard</title>
    <link rel="stylesheet" href="../agroassist/css/dashbaord.css">

</head>

<body>

<div id="dashboard-layout">

<<<<<<< HEAD
<!-- SIDEBAR -->
<div id="sidebar">

    <div id="sidebar-logo">
        🌱 AgroAssist
    </div>

    <ul id="sidebar-menu">
        <li id="menu-dashboard">Dashboard</li>

        <li id="menu-market-prices">
            <a href="market-price.php">Market Prices</a>
        </li>

        <li id="menu-advisories">
            <a href="advisory.php">Advisories</a>
        </li>

        <li>
            <a href="messages.php">
                 Messages (<?= $count ?>)
            </a>
        </li>

        <li id="menu-profile">
            <a href="profile.php">Profile</a>
        </li>

        <li>
            <a href="logout.php" id="btn-logout">Logout</a>
        </li>
    </ul>

    <!-- USER INFO -->
    <div id="sidebar-user">
        <span id="user-initials">JD</span>
        <div>
            <span id="farmer-name">
                <?php echo $farmer_name; ?>
            </span>
            <p id="user-role">Premium Farmer</p>
        </div>
    </div>

</div>

<!-- MAIN CONTENT -->
<div id="dashboard-content">

    <!-- HEADER -->
    <div id="dashboard-header">
        <h2 id="dashboard-title">Dashboard Overview</h2>
    </div>

    <!-- WELCOME -->
    <div id="welcome-section">
        <h1 id="welcome-title">
            Welcome back, <?php echo $farmer_name; ?>
        </h1>
        <p id="welcome-subtitle">
            Here is what's happening on your farm today.
        </p>
    </div>

    <!-- PROFILE CARD -->
    <div id="profile-card">
        <img id="farmer-avatar" src="images/hand.jpeg">

        <div id="farmer-info">
            <h3 id="profile-name"><?php echo $farmer_name; ?></h3>
            <p id="profile-location">Molyko Buea, CMR</p>
            <p id="profile-crops">Corn & Soybeans</p>
            <p id="profile-member">Member since 2021</p>
        </div>

        <button id="btn-edit-profile">Edit Profile</button>
    </div>

    <!-- MARKET PRICES -->
    <div id="market-section">
        <h3 id="market-title">Current Market Prices</h3>

        <div id="market-cards">

            <div class="price-card">
                <h4>Corn</h4>
                <p>$4.25</p>
                <span>+2.4%</span>
            </div>

            <div class="price-card">
                <h4>Wheat</h4>
                <p>$6.12</p>
                <span>-1.1%</span>
            </div>

            <div class="price-card">
                <h4>Soybeans</h4>
                <p>$12.45</p>
                <span>+0.8%</span>
            </div>

        </div>
    </div>

    <!-- ADVISORIES -->
    <div id="advisory-section">
        <h3 id="advisory-title">Latest Advisories</h3>

        <div class="advisory-card">
            <h4>Pest Control Alert</h4>
            <p>Increased activity of Fall Armyworm detected.</p>
        </div>

        <div class="advisory-card">
            <h4>Irrigation Strategy</h4>
            <p>Upcoming dry spell predicted for next 5 days.</p>
        </div>
    </div>

</div>
=======
    <!-- SIDEBAR -->
    <div id="sidebar">

        <div id="sidebar-logo">
            🌱 AgroAssist
        </div>

        <ul id="sidebar-menu">
            <li id="menu-dashboard">Dashboard</li>

            <li id="menu-market-prices">
                <a href="market-price.php">Market Prices</a>
            </li>

            <li id="menu-advisories">
                <a href="advisory.php">Advisories</a>
            </li>

            <li id="menu-messages">
                <a href="messages.php">Messages</a>
            </li>

            <li id="menu-profile">
                <a href="profile.php">Profile</a>
            </li>

            <a href="logout.php" id="btn-logout">Logout</a>
        </ul>

        <div id="sidebar-user">

            <span id="user-initials">JD</span>

            <div>
                <span id="farmer-name">
                    <?php echo $farmer_name; ?>
                </span>

                <p id="user-role">Premium Farmer</p>
            </div>

        </div>

    </div>

    <!-- MAIN CONTENT -->
    <div id="dashboard-content">

        <!-- HEADER -->
        <div id="dashboard-header">
            <h2 id="dashboard-title">
                Dashboard Overview
            </h2>
        </div>

        <!-- WELCOME TEXT -->
        <div id="welcome-section">
            <h1 id="welcome-title">
                Welcome back, <?php echo $farmer_name; ?>
            </h1>

            <p id="welcome-subtitle">
                Here is what's happening on your farm today.
            </p>
        </div>

        <!-- PROFILE CARD -->
        <div id="profile-card">

            <img id="farmer-avatar" src="images/hand.jpeg">

            <div id="farmer-info">

                <h3 id="profile-name">
                    <?php echo $farmer_name; ?>
                </h3>

                <p id="profile-location">
                    Molyko Buea , cmr
                </p>

                <p id="profile-crops">
                    Corn & Soybeans
                </p>

                <p id="profile-member">
                    Member since 2021
                </p>

            </div>

            <button id="btn-edit-profile">
                Edit Profile
            </button>

        </div>

        <!-- MARKET PRICES -->
        <div id="market-section">

            <h3 id="market-title">
                Current Market Prices
            </h3>

            <div id="market-cards">

                <div class="price-card" id="price-corn">
                    <h4>Corn</h4>
                    <p id="price-corn-value">$4.25</p>
                    <span id="price-corn-change">+2.4%</span>
                </div>

                <div class="price-card" id="price-wheat">
                    <h4>Wheat</h4>
                    <p id="price-wheat-value">$6.12</p>
                    <span id="price-wheat-change">-1.1%</span>
                </div>

                <div class="price-card" id="price-soy">
                    <h4>Soybeans</h4>
                    <p id="price-soy-value">$12.45</p>
                    <span id="price-soy-change">+0.8%</span>
                </div>

            </div>

        </div>

        <!-- ADVISORIES -->
        <div id="advisory-section">

            <h3 id="advisory-title">
                Latest Advisories
            </h3>

            <div class="advisory-card" id="advisory-1">
                <h4>Pest Control Alert</h4>
                <p>
                    Increased activity of Fall Armyworm detected.
                </p>
            </div>

            <div class="advisory-card" id="advisory-2">
                <h4>Irrigation Strategy</h4>
                <p>
                    Upcoming dry spell predicted for next 5 days.
                </p>
            </div>

        </div>

    </div>

>>>>>>> 96612d8cce30dbf8670ac595521cbaedbe8b33f7
</div>

</body>
</html>