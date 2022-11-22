<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/../../app.php';
$page_title = 'Add Recipe';
include_once __DIR__ . '/../../_components/header.php';
?>


<?php
$query = 'SELECT * FROM recipes';
$result = mysqli_query($db_connection, $query);
?>

<h2 class="page-title">Add Recipe</h2>


<section class="recipe-input-container">
    <form class="add-recipe" action="<?php echo site_url(); ?>/_includes/process-create-recipes.php" method="POST">
    <div class="recipe-input-row">
        <h5>Recipe Name:</h5>
        <input class="recipe-input" type="text" name="Recipe_name"></input>
    </div>

    <div class="recipe-input-row">
        <h5>Level:</h5>
        <input class="recipe-input" type="text" name="Level"></input>
    </div>

    <div class="recipe-input-row">
        <h5>Servings:</h5>
        <input class="recipe-input" type="text" name="Servings"></input>
    </div>

    <div class="recipe-input-row">
        <h5>Prep Time:</h5>
        <input class="recipe-input" type="text" name="Prep_time"></input>
    </div>

    <div class="recipe-input-row">
        <h5>Cook Time:</h5>
        <input class="recipe-input" type="text" name="Cook_time"></input>
    </div>

    <div class="recipe-input-row">
        <h5>Total Time:</h5>
        <input class="recipe-input" type="text" name="Total_time"></input>
    </div>

    <div class="recipe-input-row">
        <h5>Recipe Image:</h5>
        <input class="recipe-input" type="text" name="Image_path"></input>
    </div>

    <div class="recipe-input-row">
        <h5 class="input-textarea">Ingredients:</h5>
        <!-- <input class="recipe-input" type="text" name="Ingredients"></input> -->
        <textarea name="Ingredients" id="" cols="30" rows="10"></textarea>
    </div>

    <div class="recipe-input-row">
        <h5 class="input-textarea">Directions:</h5>
        <!-- <input class="recipe-input" type="text" name="Directions"></input> -->
        <textarea name="Directions" id="" cols="30" rows="10"></textarea>
    </div>

    <div class="submit-btn-container">
        <input class="submit-btn" type="submit" value="Submit Recipe"></input>
    </div>

</form>
</section>


<?php include_once __DIR__ . '/../../_components/footer.php';