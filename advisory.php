<?php

include "backend/db.php";

$query = "SELECT * FROM advisories ORDER BY created_at DESC";

$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html>

<head>

<title>Advisory - AgroAssist</title>

<link rel="stylesheet" href="css/global.css">
<link rel="stylesheet" href="css/advisory.css">

</head>

<body>


<!-- HEADER -->

<header id="advisory-header">

<div id="menu-icon">☰</div>

<h2 id="advisory-logo">AgroAssist</h2>

<div id="profile-icon">👤</div>

</header>



<!-- SEARCH -->

<div id="advisory-search-container">

<input
id="advisory-search-input"
type="text"
placeholder="Search farming techniques, pests..."
>

</div>



<!-- CATEGORY FILTER -->

<div id="advisory-filters">

<button id="filter-all-advisory" class="filter-active">
All Advisory
</button>

<button id="filter-techniques">
Techniques
</button>

<button id="filter-pest-control">
Pest Control
</button>

</div>



<!-- SEASONAL GUIDANCE -->

<section id="seasonal-guidance">

<h2 id="season-title">Seasonal Guidance</h2>


<div id="season-card">

<img
id="season-image"
src="images/monsoon.jpg"
>

<div id="season-content">

<span id="season-tag">Trending</span>

<h3 id="season-heading">
Maximizing Monsoon Harvests
</h3>

<p id="season-description">
Learn essential water management and drainage techniques for the upcoming rainy season.
</p>

</div>

</div>

</section>



<section id="recent-articles">

<h2 id="articles-title">Recent Articles</h2>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<div class="article-card">

<img
class="article-image"
src="images/<?php echo $row['image']; ?>"
>

<div class="article-content">

<span class="article-category">

<?php echo strtoupper($row['category']); ?>

</span>

<h3 class="article-title">

<?php echo $row['title']; ?>

</h3>

<p class="article-desc">

<?php echo $row['description']; ?>

</p>

<span class="article-meta">

<?php echo $row['read_time']; ?> •
<?php echo date("M d, Y", strtotime($row['created_at'])); ?>

</span>

</div>

</div>

<?php } ?>

</section>

<!-- BOTTOM NAV -->

<footer id="advisory-bottom-nav">

<div id="nav-home">Home</div>

<div id="nav-advisory-active">Advisory</div>

<div id="nav-market">Market</div>

<div id="nav-support">Support</div>

</footer>


</body>

</html>