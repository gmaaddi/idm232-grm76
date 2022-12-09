<?php
include_once __DIR__ . '/app.php';
$page_title = 'Recipes';
include_once __DIR__ . '/_components/header.php';
?>

<div class="main">
<div class="featured-container">
        <h2 class="page-title">All Recipes</h2>
        <?php include __DIR__ . '/_components/card.php'; ?>
    </div>
</div>

<?php include_once __DIR__ . '/_components/footer.php';
