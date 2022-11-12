<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = 'Add Recipe';
include_once __DIR__ . '/_components/header.php';
?>

<h2 class="page-title">Add Recipe</h2>

<section class="recipe-input-container">
    <form class="add-recipe">
    <div class="recipe-input-row">
        <h5>Recipe Name:</h5>
        <input class="recipe-input"></input>
    </div>

    <div class="recipe-input-row">
        <h5>Level:</h5>
        <input class="recipe-input"></input>
    </div>

    <div class="recipe-input-row">
        <h5>Servings:</h5>
        <input class="recipe-input"></input>
    </div>

    <div class="recipe-input-row">
        <h5>Rating:</h5>
        <input class="recipe-input"></input>
    </div>

    <div class="recipe-input-row">
        <h5>Prep Time:</h5>
        <input class="recipe-input"></input>
    </div>

    <div class="recipe-input-row">
        <h5>Cook Time:</h5>
        <input class="recipe-input"></input>
    </div>

    <div class="recipe-input-row">
        <h5>Total Time:</h5>
        <input class="recipe-input"></input>
    </div>

    <div class="recipe-input-row">
        <h5>Ingredients:</h5>
        <input class="recipe-input"></input>
    </div>

    <div class="recipe-input-row">
        <h5>Directions:</h5>
        <input class="recipe-input"></input>
    </div>

    <div class="recipe-input-row">
        <h5>Recipe Image:</h5> <input class="file-btn" type="file"></input>
    </div>

    <div class="submit-btn-container">
        <input class="submit-btn" type="submit" value="Submit Recipe"></input>
    </div>
</form>
</section>

<?php include_once __DIR__ . '/_components/footer.php';
