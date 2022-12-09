<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/../../app.php';
$page_title = 'Edit Recipe';
include_once __DIR__ . '/../../_components/header.php';

?>

<?php
// get users data from database
$query = "SELECT * FROM recipes WHERE Id = {$_GET['Id']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $user variable;
    $recipe_row = mysqli_fetch_assoc($result);
} else {
    $error_message = 'Recipe does not exist';
    // redirect_to('/admin/users?error=' . $error_message);
}

?>

<h2 class="page-title">Edit Recipe</h2>



<section class="recipe-input-container">
    <form class="add-recipe" action="<?php echo site_url(); ?>/_includes/process-edit-recipes.php" method="POST">
    <div class="recipe-input-row">
        <h5>Recipe Name:</h5>
        <input class="recipe-input" type="text" name="Recipe_name" value="<?php echo $recipe_row['Recipe_name']?>">
    </div>

    <div class="recipe-input-row">
        <h5>Level:</h5>
        <input class="recipe-input" type="text" name="Level" value="<?php echo $recipe_row['Level']?>">
    </div>

    <div class="recipe-input-row">
        <h5>Servings:</h5>
        <input class="recipe-input" type="text" name="Servings" value="<?php echo $recipe_row['Servings']?>">
    </div>

    <div class="recipe-input-row">
        <h5>Prep Time:</h5>
        <input class="recipe-input" type="text" name="Prep_time" value="<?php echo $recipe_row['Prep_time']?>">
    </div>

    <div class="recipe-input-row">
        <h5>Cook Time:</h5>
        <input class="recipe-input" type="text" name="Cook_time" value="<?php echo $recipe_row['Cook_time']?>">
    </div>

    <div class="recipe-input-row">
        <h5>Total Time:</h5>
        <input class="recipe-input" type="text" name="Total_time" value="<?php echo $recipe_row['Total_time']?>">
    </div>

    <div class="recipe-input-row">
        <h5>Recipe Image:</h5>
        <input class="recipe-input" type="text" name="Image_path" value="<?php echo $recipe_row['Image_path']?>">
    </div>

    <div class="recipe-input-row">
        <h5 class="input-textarea">Ingredients:</h5>
        <textarea name="Ingredients" cols="30" rows="10"> <?php echo $recipe_row['Ingredients']; ?></textarea>
    </div>

    <div class="recipe-input-row">
        <h5 class="input-textarea">Directions:</h5>
        <textarea name="Directions" cols="30" rows="10"> <?php echo $recipe_row['Directions']; ?></textarea>
    </div>

    <div class="submit-btn-container">
        <input class="submit-btn" type="submit" value="Update Recipe">
    </div>

    <input type="hidden" name="Id" value="<?php echo $_GET['Id']?>">

</form>
</section>


<?php include_once __DIR__ . '/../../_components/footer.php';