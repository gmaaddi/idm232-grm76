<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = 'Recipes';
include_once __DIR__ . '/_components/header.php';
?>

<div class="main">
<div class="featured-container">
        <h3 class="featured-text">All Recipes</h3>
        <?php include __DIR__ . '/_components/card.php'; ?>
    </div>
</div>

<?php include_once __DIR__ . '/_components/footer.php';
