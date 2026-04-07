<?php

session_start();

/* PROTECT ADMIN PAGE */
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

/* CONNECT DATABASE */
include "backend/db.php";

/* COUNT FARMERS */
$farmers = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM farmers")
);
$total_farmers = $farmers['total'];

/* COUNT ADVISORIES */
$advisories = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM advisories")
);
$total_advisories = $advisories['total'];

/* COUNT MARKET UPDATES */
$market = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM market_rates")
);
$total_market = $market['total'];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>

<div id="admin-layout">

    <!-- SIDEBAR -->
    <div id="admin-sidebar">
        <h2 id="admin-logo">🌱 AgroAssist</h2>

        <ul>
            <li class="active">Dashboard</li>
            <li>Users</li>
            <li>Market Prices</li>
            <li>Advisories</li>
            <li>Settings</li>
        </ul>
    </div>

    <!-- MAIN CONTENT -->
    <div id="admin-main">

        <!-- TOPBAR -->
        <div id="admin-topbar">
            <h2>Dashboard Overview</h2>

            <div id="admin-profile">
                <span>Admin</span>
            </div>
        </div>

        <!-- STATISTICS -->
        <div id="stats-grid">

            <div class="stat-card">
                <h4>Total Farmers</h4>
                <h1><?php echo $total_farmers; ?></h1>
                <p class="green">+12% this month</p>
            </div>

            <div class="stat-card">
                <h4>Active Advisories</h4>
                <h1><?php echo $total_advisories; ?></h1>
                <p class="green">+5% updates</p>
            </div>

            <div class="stat-card">
                <h4>Market Updates</h4>
                <h1><?php echo $total_market; ?></h1>
                <p class="red">-2% today</p>
            </div>

        </div>

        <!-- DASHBOARD GRID -->
        <div id="dashboard-grid">

            <!-- QUICK MANAGEMENT -->
            <div class="panel">
                <h3>Quick Management</h3>

                <div class="quick-actions">
                    <a href="manage-users.php">Manage Users</a>
                    <a href="add-prices.php">Add Prices</a>
                    <a href="publish-advisory.php">Publish Advisory</a>
                </div>
            </div>

            <!-- RECENT ACTIVITY -->
            <div class="panel">
                <h3>Recent Activity</h3>

                <ul class="activity-list">
                    <li>New farmer registered</li>
                    <li>Market price updated</li>
                    <li>Weather advisory published</li>
                </ul>
            </div>

        </div>

    </div>

</div>

</body>
</html>