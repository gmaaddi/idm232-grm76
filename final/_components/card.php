
<?php
$recipe_results = get_recipes();
if (!isset($recipe_results)) {
    echo '$recipe results variable is not defined. Please check the code.';
}
?>

<div class="card-container">
<?php
    $site_url = site_url();
    $query = "SELECT * FROM recipes";
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
            
            // echo $recipe_row['Recipe_name'];
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



