<?php
// Home page: reuses the header and footer instead of duplicating HTML.
$pageTitle = 'Welcome';
$activePage = 'home';
include 'header.php';
?>
<section class="hero">
    <div class="container hero-grid">
        <div class="hero-copy">
            <p class="eyebrow">WELCOME TO THE GOLDEN TABLE</p>
            <h1>Fresh flavors.<br><em>Warm welcomes.</em></h1>
            <p class="lead">Comfort food made with care, served in a place that feels like home.</p>
            <div class="hero-actions">
                <a class="button button-primary" href="menu.php">Explore Our Menu <span aria-hidden="true">↗</span></a>
                <a class="button button-outline" href="about.php">Our Story</a>
            </div>
            <div class="hero-details"><span>✦ Fresh ingredients</span><span>✦ Made with care</span></div>
        </div>
        <div class="hero-art" role="img" aria-label="Illustrated plate of a delicious colorful pasta meal">
            <div class="art-circle"><div class="plate"><div class="pasta">🍝</div></div></div>
            <div class="floating-note">TODAY'S SPECIAL <strong>Chef's Pasta</strong></div>
        </div>
    </div>
</section>
<section class="intro-section">
    <div class="container intro-grid">
        <div><p class="eyebrow">THE GOOD STUFF</p><h2>Made fresh,<br>every single day.</h2></div>
        <div><p>At Golden Table, we believe a great meal brings people together. Our fictional restaurant offers satisfying dishes, friendly service, and something for everyone.</p><a class="text-link" href="menu.php">See what we're serving →</a></div>
    </div>
</section>
<section class="features-section">
    <div class="container feature-grid">
        <article class="feature"><span class="feature-icon">🥬</span><h3>Fresh ingredients</h3><p>Simple, quality ingredients in every dish.</p></article>
        <article class="feature"><span class="feature-icon">🍽️</span><h3>Something for everyone</h3><p>From hearty meals to lighter favorites.</p></article>
        <article class="feature"><span class="feature-icon">☀️</span><h3>A welcoming place</h3><p>Good food and a relaxed atmosphere.</p></article>
    </div>
</section>
<?php include 'footer.php'; ?>
