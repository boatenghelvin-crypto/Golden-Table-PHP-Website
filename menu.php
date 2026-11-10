<?php
// Dynamic PHP menu: dishes come from an array and are displayed using foreach.
$pageTitle = 'Our Menu';
$activePage = 'menu';
$dishes = [
    ['name' => 'Golden Chicken Bowl', 'description' => 'Grilled chicken, seasoned rice, fresh greens, and house sauce.', 'price' => 14.50, 'icon' => '🥗', 'tag' => 'MOST POPULAR'],
    ['name' => 'Creamy Garden Pasta', 'description' => 'Pasta tossed with fresh vegetables and a creamy garlic sauce.', 'price' => 13.00, 'icon' => '🍝', 'tag' => 'CHEF FAVORITE'],
    ['name' => 'Classic Cheeseburger', 'description' => 'Juicy beef patty, melted cheese, lettuce, tomato, and fries.', 'price' => 12.75, 'icon' => '🍔', 'tag' => 'CLASSIC'],
    ['name' => 'Fresh Garden Salad', 'description' => 'Mixed greens, cucumber, tomato, and a citrus dressing.', 'price' => 10.00, 'icon' => '🥬', 'tag' => 'LIGHT BITE'],
    ['name' => 'Crispy Fish Tacos', 'description' => 'Three tacos with crunchy slaw and tangy lime dressing.', 'price' => 15.25, 'icon' => '🌮', 'tag' => 'FRESH PICK'],
    ['name' => 'Chocolate Fudge Cake', 'description' => 'Rich chocolate cake served with a scoop of vanilla ice cream.', 'price' => 7.50, 'icon' => '🍰', 'tag' => 'SWEET TREAT'],
];
include 'header.php';
?>
<section class="page-banner"><div class="container"><p class="eyebrow">MADE WITH CARE</p><h1>Our Menu</h1><p>Good food for every kind of craving.</p></div></section>
<section class="menu-section"><div class="container"><div class="section-heading"><div><p class="eyebrow">HOUSE FAVORITES</p><h2>Find your next favorite.</h2></div><p>Freshly prepared, full of flavor.</p></div>
<div class="menu-grid">
<?php foreach ($dishes as $dish): ?>
    <article class="menu-card">
        <div class="menu-illustration" aria-hidden="true"><?= htmlspecialchars($dish['icon'], ENT_QUOTES, 'UTF-8') ?></div>
        <div class="menu-card-body">
            <span class="menu-tag"><?= htmlspecialchars($dish['tag'], ENT_QUOTES, 'UTF-8') ?></span>
            <div class="menu-name-row"><h3><?= htmlspecialchars($dish['name'], ENT_QUOTES, 'UTF-8') ?></h3><strong>$<?= number_format($dish['price'], 2) ?></strong></div>
            <p><?= htmlspecialchars($dish['description'], ENT_QUOTES, 'UTF-8') ?></p>
        </div>
    </article>
<?php endforeach; ?>
</div><p class="disclaimer">* Menu items and prices are fictional for this class assignment.</p></div></section>
<?php include 'footer.php'; ?>
