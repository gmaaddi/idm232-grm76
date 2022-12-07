<?php
include_once __DIR__ . '/../../app.php';
if (isset($_GET['Id'])) {
    $Id = $_GET['Id'];
} else {
    die('ID is needed in URL');
}

$query = "DELETE FROM recipes WHERE Id = {$Id}";
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    // redirect_to('../../final/list.php');
    redirect_to('../../final/admin/recipes/index.php');
} else {
    $error_message = 'Could Not Delete Recipe: ' . mysqli_error($db_connection);
    redirect_to('/admin/recipes?error=' . $error_message);
}