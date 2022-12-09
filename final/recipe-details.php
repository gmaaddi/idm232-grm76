<?php
include_once __DIR__ . '/app.php';
$page_title = 'Recipe Details';
include_once __DIR__ . '/_components/header.php';
?>

<?php
$recipe_results = get_recipes();
if (!isset($recipe_results)) {
    echo '$recipe results variable is not defined. Please check the code.';
}

$site_url = site_url();
$query = "SELECT * FROM recipes WHERE Id = {$_GET['Id']}";
$result = mysqli_query($db_connection, $query);
$check_recipe = mysqli_num_rows($result) > 0;

if($check_recipe)
    {
        while($recipe_row = mysqli_fetch_array($result))
        {
            echo
            "
            <div class='detail-container'>
                <div class='detail-text'>
                    <h2 class='detail-text-title'>{$recipe_row['Recipe_name']}</h2> <br>
        
                    <h5 class='detail-paragraph'>
                        <b>Level: </b> {$recipe_row['Level']} <br>
                        <b>Servings: </b>{$recipe_row['Servings']}<br>
                        <b>Prep Time: </b>{$recipe_row['Prep_time']}<br>
                        <b>Cook Time: </b>{$recipe_row['Cook_time']}<br>
                        <b>Total Time: </b>{$recipe_row['Total_time']}<br>
                    </h5>
                </div>
        
                <img src='{$site_url}{$recipe_row['Image_path']}' class='detail-img' alt='recipe-image'> 
            </div>

            <section class='recipe-details'>
                <div class='recipe-container'>
                    <h2 class='heading'>Ingredients</h2> <hr> <br>
                    {$recipe_row['Ingredients']}

                    <h2 class='heading'>Directions</h2> <hr>
                    {$recipe_row['Directions']}
                </div>
            </section>
            ";            
        }
    }
    else
    {
        echo "No recipe found";
    }
?>

<?php include_once __DIR__ . '/_components/footer.php';
