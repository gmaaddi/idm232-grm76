<?php 

if (!$_POST) {
    die('Unauthorized');
}
include __DIR__ . '/../app.php';

// Store $_POST data to variables for readability
$Recipe_name_value = sanitize_value($_POST['Recipe_name']);
$Level_value = sanitize_value($_POST['Level']);
$Servings_value  = sanitize_value($_POST['Servings']);
$Prep_time_value = sanitize_value($_POST['Prep_time']);
$Cook_time_value = sanitize_value($_POST['Cook_time']);
$Total_time_value = sanitize_value($_POST['Total_time']);
$Image_path_value = sanitize_value($_POST['Image_path']);
$Ingredients_value = sanitize_value($_POST['Ingredients']);
$Directions_value = sanitize_value($_POST['Directions']);

$result = add_recipe(
    // $Id_value,
    $Recipe_name_value,
    $Level_value,
    $Servings_value,
    $Prep_time_value,
    $Cook_time_value,
    $Total_time_value,
    $Image_path_value,
    $Ingredients_value,
    $Directions_value,
);

// Check there are no errors with our SQL statement
if ($result) {
//     echo "redirecting!!!";
    // redirect_to('/admin/recipes');
    redirect_to('/list.php');
}
 else {
    // $error_message = 'Sorry there was an error creating the recipe';
    // echo $result;
    // redirect_to('/admin/recipes?error=' . $error_message);
}
?>