<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
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
        
                    <p class='detail-paragraph'>
                        <b>Level: </b> {$recipe_row['Level']} <br>
                        <b>Servings: </b>{$recipe_row['Servings']}<br>
                        <b>Prep Time: </b>{$recipe_row['Prep_time']}<br>
                        <b>Cook Time: </b>{$recipe_row['Cook_time']}<br>
                        <b>Total Time: </b>{$recipe_row['Total_time']}<br>
                    </p>
                </div>
        
                <img src='{$site_url}{$recipe_row['Image_path']}' class='detail-img' alt='recipe-image'> 
                </div>

                <section class='recipe-details'>
                    <div class='recipe-container'>
                        <h2 class='heading'>Ingredients</h2> <hr> <br>
            
                        <p class='ingredients-list'>
                        <b>{$recipe_row['Ingredients']}</b>
                        </p>

                    <div class='directions-container'>
                        <h2 class='heading'>Directions</h2> <hr>
                        {$recipe_row['Directions']}
            ";            
        }
    }
    else
    {
        echo "No recipe found";
    }
?>
<!-- 
<div class="detail-container">
        <div class="detail-text">
            <h2 class="detail-text-title">Bucatini Alfredo with Broccoli</h2> <br>

            <p class="detail-paragraph">
                <b>Level:</b> Intermediate <br>
                <b>Servings:</b> 4 <br>
                <b>Prep Time:</b> 10 mins <br>
                <b>Cook Time:</b> 20 mins <br>
                <b>Total Time:</b> 30 mins <br>
            </p>
        </div>

        <img class="detail-img" src="dist/images/img_bucatini-alfredo.jpg"></img>
    </div>

    <section class="recipe-details">
        <div class="recipe-container">
            <h2 class="heading">Ingredients</h2> <hr> <br>
            
            <p class="ingredients-list">
                <b>
                &#x2022; 2 Tbsps Crème Fraîche <br>
                &#x2022; 1/4 tsp Crushed Red Pepper Flakes <br>
                &#x2022; 3 Tbsps All-Purpose Flour <br>
                &#x2022; 1/4 cup Grated Pecorino Cheese
                </b>
            </p>
                
            <div class="directions-container">
                <h2 class="heading">Directions</h2> <hr> <br>
                    
                    <div class="step-container">
                        <h3 class="step">Step 1:</h3>
                        <p class="step-text">Heat a large pot of salted water to boiling on high. Wash and dry the fresh produce. Cut off and discard the bottom 1/2 inch of the broccoli stem; cut the broccoli into small pieces, keeping the florets intact. Peel and finely chop the garlic.</p>
                    </div>

                    <div class="step-container">
                        <h3 class="step">Step 2:</h3>
                        <p class="step-text">In a large pan, heat 2 teaspoons of olive oil on medium-high until hot. Add the broccoli pieces; season with salt and pepper. Cook, stirring occasionally, 4 to 5 minutes, or until slightly softened. Add 1/2 cup of water; season with salt and pepper. Cover the pan with aluminum foil and cook 3 to 4 minutes, or until the broccoli has softened and the water has cooked off. Transfer to a bowl. Wipe out the pan.</p>
                    </div>

                    <div class="step-container">
                        <h3 class="step">Step 3:</h3>
                        <p class="step-text">While the broccoli cooks, add the pasta to the pot of boiling water and cook 8 to 10 minutes, or until al dente (still slightly firm to the bite). Reserving 1/2 cup of the pasta cooking water, drain thoroughly.</p>
                    </div>

                    <div class="step-container">
                        <h3 class="step">Step 4:</h3>
                        <p class="step-text">In the same pan, heat 1 + 1/2 tablespoons of olive oil on medium-high until hot. Add the chopped garlic; season with salt and pepper. Cook, stirring constantly, 30 seconds to 1 minute, or until fragrant. Add the flour and as much of the red pepper flakes as you would like, depending on how spicy you would like the dish to be. Cook, stirring constantly, 30 seconds to 1 minute, or until thoroughly combined. Add the heavy cream (shaking the bottle just before opening), verjus, and 1 + 1/4 cups of water; season with salt and pepper. Cook, whisking frequently, 2 to 3 minutes or until thickened; season with salt and pepper to taste.</p>
                    </div>

                    <div class="step-container">
                        <h3 class="step">Step 5:</h3>
                        <p class="step-text">Add the cooked pasta, cooked broccoli, crème fraîche, and half the reserved pasta cooking water to the pan. Cook, stirring vigorously, 30 seconds to 1 minute, or until the pasta is thoroughly coated. (If the sauce seems dry, gradually add the remaining pasta cooking water to achieve your desired consistency.) Turn off the heat and season with salt and pepper to taste. Garnish the finished pasta with the cheese; season with pepper. Enjoy!</p>
                    </div>
            </div>
        </div>
    </section> -->
</section>
<?php include_once __DIR__ . '/_components/footer.php';
