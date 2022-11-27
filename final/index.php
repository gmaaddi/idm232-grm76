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
        <?php
$recipe_results = get_recipes();
if (!isset($recipe_results)) {
    echo '$recipe results variable is not defined. Please check the code.';
}
?>

<div class="card-container">
<?php
    $site_url = site_url();
    $query = "SELECT * FROM recipes WHERE Id = 5 OR Id = 17 OR Id = 28 OR Id = 35";
    $result = mysqli_query($db_connection, $query);
    $check_recipe = mysqli_num_rows($result) > 0;

    if($check_recipe)
    {
        while($recipe_row = mysqli_fetch_array($result))
        {
            echo
            "
                    <div class='card'>
                        <a class='card-link' href='{$site_url}/recipe-details.php?Id={$recipe_row['Id']}'>
                        <img src='{$site_url}{$recipe_row['Image_path']}' class='card-img' alt='recipe-image'> 
                        <h5 class='card-title'>{$recipe_row['Recipe_name']}</h5>
                        </a>
                    </div>
            ";
        }
    }
    else
    {
        echo "No recipe found";
    }
    // if ($result->num_rows > 0) {
    //     $recipe_results = true;
    // } else {
    //     $recipe_results = false;
    // }
?>
</div>
        <div class="all-btn">
            <a href="<?php echo site_url(); ?>/recipes.php"><button><h5>View All Recipes</h5></button></a>
        </div>
    </div>
</div>

<?php include_once __DIR__ . '/_components/footer.php';
?>