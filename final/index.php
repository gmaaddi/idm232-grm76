<?php
include_once __DIR__ . '/app.php';

$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
?>

<div class="top-container">
    <div class="top-container-wrapper">
        <div class="top-container__index">
            <h1 class="index-title"><span class="pink">Delish</span><span class="orange">Dishes</span> <br>for every meal</h1>
            <h3 class="index-description">Browse or search to find recipes perfect for each meal. What will you make next?</h3>
        </div>

        <div class="top-container-img">
            <img src="dist/images/index-dishes.png"></img>
         </div>
    </div>
</div>

<div class="main">
    <div class="featured-container">
        <h3 class="featured-text">Featured Recipes</h3>
        <?php include __DIR__ . '/_components/card.php'; ?>
        <div class="all-btn">
            <a href="<?php echo site_url(); ?>/recipes.php"><button><h5>View All Recipes</h5></button></a>
        </div>
    </div>
</div>


<h3 class="assignment-title">Alpha Assignment</h3>
<h3 class="assignment-link"><li><a href="recipe_details.php">Click here to access Recipe Detail Page</a></li></h3>

<?php include_once __DIR__ . '/_components/footer.php';
?>