<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/../../app.php';
$page_title = 'My Recipes';
include_once __DIR__ . '/../../_components/header.php';
$recipe_results = get_recipes();
?>


<?php
if (!isset($recipe_results)) {
    echo '$recipe results variable is not defined. Please check the code.';
}
?>


<div class="my-recipes__container">
    <h2 class="page-title">My Recipes</h2>
    
    <a href="<?php echo site_url(); ?>/admin/recipes/create.php" class="fill-btn button">+ Add New Recipe</a>
</div>


<div class="table-container">
<table>
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Recipe Name</th>
      <th scope="col">Level</th>
      <th scope="col">Servings</th>
      <th scope="col">Actions</th>
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
                    <td data-label='Actions' class='actions'>
                        <a href='{$site_url}/admin/recipes/edit.php?Id={$recipe_row['Id']}' class='btn-link button fill-btn action-btn'>Edit</a>
                        <a href='{$site_url}/admin/recipes/delete.php?Id={$recipe_row['Id']}' class='btn-link button fill-btn action-btn'>Delete</a>
                    </td>
                </tr>

                </tbody>
            ";
        // '<pre>';
        // var_dump ($recipe_row['Id']);
        // echo '</pre>';
    }
?>

</table>
</div>

<?php include_once __DIR__ . '/../../_components/footer.php';

