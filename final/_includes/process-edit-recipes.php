<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$Recipe_name_value = $_POST['Recipe_name'];
$Level_value = $_POST['Level'];
$Servings_value = $_POST['Servings'];
$Prep_time_value = $_POST['Prep_time'];
$Cook_time_value = $_POST['Cook_time'];
$Total_time_value = $_POST['Total_time'];
$Ingredients_value = $_POST['Ingredients'];
$Directions_value = $_POST['Directions'];
$Id_value = $_POST['Id'];

// Create a SQL statement to insert the data into the database
$query = "UPDATE recipes SET Recipe_name = '{$Recipe_name_value}', Level = '{$Level_value}', Servings = '{$Servings_value}', Prep_time = '{$Prep_time_value}', Cook_time = '{$Cook_time_value}', Total_time = '{$Total_time_value}', Ingredients = '{$Ingredients_value}', Directions = '{$Directions_value}'  WHERE Id = {$Id_value}";
// Run the SQL statement
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/list.php');
} else {
    $error_message = 'Recipe was not updated';
    // redirect_to('/admin/users?error=' . $error_message);
}