<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = 'All Recipes';
include_once __DIR__ . '/_components/header.php';
?>

<div class="my-recipes__container">
    <h2 class="page-title">My Recipes</h2>
    
    <a href="http://localhost:8888/final/add-recipe.php"><button class="add-recipe-btn"><h5>+ Add New Recipe</h5></button></a>
</div>

<div class="table-container">
<table border=1 frame=void rules=rows>
  <thead>
    <tr>
      <th scope="col"><h5>Image</h5></th>
      <th scope="col"><h5>Recipe Name</h5></th>
      <th scope="col"><h5>Level</h5></th>
      <th scope="col"><h5>Servings</h5></th>
      <th scope="col"><h5>Rating</h5></th>
      <th scope="col"><h5>Actions</h5></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-label="Image"><img class="recipe-thumbnail" src="dist/images/img_bucatini-alfredo.jpg"></td>
      <td data-label="Recipe Name"><h5>Bucatini Alfredo with Broccoli</h5></td>
      <td data-label="Level"><h5>Intermediate</h5></td>
      <td data-label="Servings"><h5>4</h5></td>
      <td data-label="Rating"><h5>5/5</h5></td>
      <td data-label="Actions">
        <button class="action-btn"><h5>Edit</h5></button> 
        <button class="action-btn"><h5>Delete</h5></button>
      </td>
    </tr>

    <tr>
      <td data-label="Image"><h5>img</h5></td>
      <td data-label="Recipe Name"><h5>General Tso’s Chicken</h5></td>
      <td data-label="Level"><h5>Intermediate</h5></td>
      <td data-label="Servings"><h5>4</h5></td>
      <td data-label="Rating"><h5>4/5</h5></td>
      <td data-label="Actions">
        <button class="action-btn"><h5>Edit</h5></button> 
        <button class="action-btn"><h5>Delete</h5></button>
      </td>
    </tr>


    <tr>
      <td data-label="Image"><h5>img</h5></td>
      <td data-label="Recipe Name"><h5>Shrimp Fra Diavolo</h5></td>
      <td data-label="Level"><h5>Intermediate</h5></td>
      <td data-label="Servings"><h5>4</h5></td>
      <td data-label="Rating"><h5>3/5</h5></td>
      <td data-label="Actions">
        <button class="action-btn"><h5>Edit</h5></button> 
        <button class="action-btn"><h5>Delete</h5></button>
      </td>
    </tr>

    <tr>
      <td data-label="Image"><h5>img</h5></td>
      <td data-label="Recipe Name"><h5>Thai Curry Chicken</h5></td>
      <td data-label="Level"><h5>Intermediate</h5></td>
      <td data-label="Servings"><h5>4</h5></td>
      <td data-label="Rating"><h5>4/5</h5></td>
      <td data-label="Actions">
        <button class="action-btn"><h5>Edit</h5></button> 
        <button class="action-btn"><h5>Delete</h5></button>
      </td>
    </tr>
    
  </tbody>
</table>
</div>
    
<?php include_once __DIR__ . '/_components/footer.php';
