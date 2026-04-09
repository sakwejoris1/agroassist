<?php

include "backend/db.php";

$result = mysqli_query($conn, "SELECT * FROM market_rates");

?>

<!DOCTYPE html>
<html>

<head>

    <title>Market Prices - AgroAssist</title>

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/market-price.css">

</head>

<body>

    <!-- HEADER -->
    <header id="market-price-header">

        <div id="market-price-logo">🚜 AgroAssist</div>

        <div id="market-price-notification">🔔</div>

    </header>

    <!-- SEARCH -->
    <div id="market-price-search-container">

        <input
            id="market-price-search-input"
            type="text"
            placeholder="Search crops or markets..."
        >

    </div>

    <!-- FILTERS -->
    <div id="market-price-filters">

        <button class="filter-active">All</button>
        <button>Grains</button>
        <button>Vegetables</button>
        <button>Fruits</button>

    </div>

    <!-- MARKET RATES -->
    <section id="market-rates-section">

        <h2>Current Market Rates</h2>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>

            <div class="market-rate-card">

                <div class="rate-info">

                    <h3><?php echo $row['crop_name']; ?></h3>

                    <p><?php echo $row['market_location']; ?></p>

                </div>

                <div class="rate-price">

                    <h2>KSh <?php echo $row['price']; ?></h2>

                    <span><?php echo $row['unit']; ?></span>

                </div>

                <div class="rate-change">

                    <span class="
                        <?php 
                        if (strpos($row['price_change'], '+') !== false) {
                            echo 'price-up';
                        } else if (strpos($row['price_change'], '-') !== false) {
                            echo 'price-down';
                        } else {
                            echo 'price-stable';
                        }
                        ?>
                    ">

                        <?php echo $row['price_change']; ?>

                    </span>

                    <span><?php echo $row['last_updated']; ?></span>

                </div>

            </div>

        <?php } ?>

    </section>

    <!-- FOOTER -->
    <footer id="market-price-bottom-nav">

        <div>Home</div>
        <div>Market</div>
        <div>Insights</div>
        <div>Advisory</div>
        <div>Profile</div>

    </footer>

</body>

</html>