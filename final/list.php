<?php
include_once __DIR__ . '/app.php';
$page_title = 'My Recipes';
include_once __DIR__ . '/_components/header.php';
$recipe_results = get_recipes();
?>


<?php
if (!isset($recipe_results)) {
    echo '$recipe results variable is not defined. Please check the code.';
}
?>


<div class="my-recipes__container">
    <h2 class="page-title">My Recipes</h2>
    
    <a href="<?php echo site_url(); ?>/admin/recipes/create.php"><button class="add-recipe-btn"><h5>+ Add New Recipe</h5></button></a>
</div>


<div class="table-container">
<table border=1 frame=void rules=rows>
  <thead>
    <tr>
    <th scope="col"><h5>ID</h5></th>
      <th scope="col"><h5>Recipe Name</h5></th>
      <th scope="col"><h5>Level</h5></th>
      <th scope="col"><h5>Servings</h5></th>
      <th scope="col"><h5>Actions</h5></th>
    </tr>
  </thead>


<?php
    $site_url = site_url();
    while ($recipe_row = mysqli_fetch_array($recipe_results)) 
    {
        echo 
            "
                <tbody>
                <tr>
                    <td data-label='Id'><h5>{$recipe_row['Id']}</h5></td>
                    <td data-label='Recipe Name'>
                        <a href='{$site_url}/recipe-details.php?Id={$recipe_row['Id']}' class='table-recipe'>
                        <h5 class='recipe-link'>{$recipe_row['Recipe_name']}</h5>
                        </a>
                    </td>
                    <td data-label='Level'><h5>{$recipe_row['Level']}</h5></td>
                    <td data-label='Servings'><h5>{$recipe_row['Servings']}</h5></td>
                    <td data-label='Actions'>
                        <a href='{$site_url}/admin/recipes/edit.php?Id={$recipe_row['Id']}' class='btn-link'> <button class='action-btn'><h5>Edit</h5></button></a>
                        <a href='{$site_url}/admin/recipes/delete.php?Id={$recipe_row['Id']}' class='btn-link'> <button class='action-btn'><h5>Delete</h5></button></a>
                    </td>
                </tr>

                </tbody>
                </div>
            ";
    }
?>

</table>
</div>

<?php include_once __DIR__ . '/_components/footer.php';

