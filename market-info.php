<!DOCTYPE html>
<html>

<head>

<title>Market Info - AgroAssist</title>

<link rel="stylesheet" href="css/global.css">
<link rel="stylesheet" href="css/market-info.css">
<link rel="stylesheet" href="css/style.css">

</head>

<body>

<!-- HEADER -->

<header id="market-header">

<div id="market-logo">
🌱 AgroAssist
</div>

<div id="market-notification">
🔔
</div>

</header>


<!-- SEARCH BAR -->

<div id="market-search-container">

<input
id="market-search-input"
type="text"
placeholder="Search crops or markets..."
>

<button id="market-filter-button">
☰
</button>

</div>


<!-- CATEGORY FILTERS -->

<div id="market-category-filters">

<button id="filter-all" class="active-filter">All Crops</button>

<button id="filter-cereals">Cereals</button>

<button id="filter-vegetables">Vegetables</button>

<button id="filter-fruits">Fruits</button>

<button id="filter-legumes">Legumes</button>

</div>


<!-- MARKET PRICE LIST -->

<section id="market-prices-section">

<h2 id="market-section-title">
Current Market Prices
</h2>


<div id="market-price-grid">


<!-- CARD 1 -->

<div class="market-card" id="crop-white-maize">

<h3 id="crop-name-maize">White Maize</h3>

<p id="crop-category-maize">Grains</p>

<h2 id="crop-price-maize">$25.50</h2>

<p id="crop-market-maize">Central Market</p>

<span id="crop-change-maize" class="price-up">
+2.4%
</span>

</div>


<!-- CARD 2 -->

<div class="market-card" id="crop-rice">

<h3 id="crop-name-rice">Long Grain Rice</h3>

<p id="crop-category-rice">Cereals</p>

<h2 id="crop-price-rice">$42.00</h2>

<p id="crop-market-rice">Northern Plaza</p>

<span id="crop-change-rice" class="price-down">
-1.2%
</span>

</div>


<!-- CARD 3 -->

<div class="market-card" id="crop-tomato">

<h3 id="crop-name-tomato">Red Tomatoes</h3>

<p id="crop-category-tomato">Vegetables</p>

<h2 id="crop-price-tomato">$12.00</h2>

<p id="crop-market-tomato">City Terminal</p>

<span id="crop-change-tomato" class="price-stable">
Stable
</span>

</div>


<!-- CARD 4 -->

<div class="market-card" id="crop-soybeans">

<h3 id="crop-name-soybeans">Soybeans</h3>

<p id="crop-category-soybeans">Legumes</p>

<h2 id="crop-price-soybeans">$38.50</h2>

<p id="crop-market-soybeans">Riverside Hub</p>

<span id="crop-change-soybeans" class="price-up">
+5.0%
</span>

</div>


</div>

</section>


<!-- ADVICE SECTION -->

<section id="market-advice-banner">

<h2 id="advice-title">
Expert Advice for your Maize Farm
</h2>

<p id="advice-description">

Get personalized tips based on current market trends.

</p>

<button id="btn-learn-more">
Learn More
</button>

</section>



<!-- BOTTOM NAVIGATION -->

<footer id="market-bottom-nav">

<div id="nav-home">Home</div>

<div id="nav-market-active">Market</div>

<div id="nav-news">News</div>

<div id="nav-profile">Profile</div>

</footer>

</body>

</html>