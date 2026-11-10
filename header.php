<?php
// Shared header for every page. Set $pageTitle and $activePage before including this file.
$pageTitle = $pageTitle ?? 'Golden Table Restaurant';
$activePage = $activePage ?? 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Golden Table is a fictional restaurant website made with PHP includes.">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?> | Golden Table</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header class="site-header">
        <div class="container header-inner">
            <a class="brand" href="index.php" aria-label="Golden Table home">
                <span class="brand-icon" aria-hidden="true">✦</span>
                <span>GOLDEN <strong>TABLE</strong><small>FRESH FOOD · GOOD COMPANY</small></span>
            </a>
            <nav aria-label="Main navigation">
                <a href="index.php" <?= $activePage === 'home' ? 'aria-current="page"' : '' ?>>Home</a>
                <a href="menu.php" <?= $activePage === 'menu' ? 'aria-current="page"' : '' ?>>Our Menu</a>
                <a href="about.php" <?= $activePage === 'about' ? 'aria-current="page"' : '' ?>>About</a>
            </nav>
        </div>
    </header>
    <main id="main-content">
