<?php
// About page: the same two include statements provide a consistent layout.
$pageTitle = 'About Us';
$activePage = 'about';
include 'header.php';
?>
<section class="page-banner"><div class="container"><p class="eyebrow">OUR STORY</p><h1>Good food, good company.</h1><p>Sharing a meal should always feel special.</p></div></section>
<section class="about-section"><div class="container about-grid"><div class="about-art" aria-hidden="true"><span>🍽️</span><p>YOU'RE ALWAYS WELCOME</p></div><div class="about-content"><p class="eyebrow">WHO WE ARE</p><h2>A seat at the table for everyone.</h2><p>Golden Table is a fictional neighborhood restaurant created for a PHP class project. Our goal is to show how a restaurant website can share information across multiple pages using PHP.</p><p>The site's navigation and page footer are stored in two separate files: <code>header.php</code> and <code>footer.php</code>. Every main page loads those files with PHP's <code>include</code> statement, making the site easy to update.</p><a class="button button-primary" href="menu.php">View the Menu →</a></div></div></section>
<?php include 'footer.php'; ?>
