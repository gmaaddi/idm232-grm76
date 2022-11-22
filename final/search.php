<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = 'Search';
include_once __DIR__ . '/_components/header.php';
$get_recipes = get_recipes();

// Check if search exist in query
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $search_string = 'You Searched For: ' . $search;
} else {
    $search = '';
    $search_string = '';
}

$query = 'SELECT *';
$query .= ' FROM recipes';
$query .= " WHERE Recipe_name LIKE '%{$search}%'";
$query .= " OR Level LIKE '%{$search}%'";
$query .= " OR Ingredients LIKE '%{$search}%'";
$results = mysqli_query($db_connection, $query);

if ( $search_string){
    $recipe_results = true;
}
else{
    $recipe_results = false;
    
}


 $result_string = '';
// $myResults = mysqli_fetch_assoc($results);

// if ($myResults == NULL){
//     $result_string .= 'Results not found';
// }

// Check if was have more than 0 results from db
// if ($results->num_rows > 0) {
//     $recipe_results = true;
//     echo $results->num_rows;
// } else {
//     $recipe_results = false;
//     echo 'I am here';
// }
?>

<div class="top-container">
    <h2 class="page-title">What are you looking for?</h2>
    <h4 class="page-description">Enter a keyword or phrase to search below</h4>

    <form action="<?php echo site_url(); ?>/search.php" method="GET" class="search-bar-container">
        <input class="search-bar" type="text" name="search" id="search" placeholder="Search recipes"
        value="<?php echo $search; ?>">
        <button class="search-btn" type="submit">Search</button>
    </form>

    <p><?php echo $search_string; ?></p>
    <p><?php echo $result_string; ?></p>

    <?php
    // If error query param exist, show error message
    if (isset($_GET['error'])) {
        echo '<p>' . $_GET['error'] . '</p>';
    }?>
</div>

<div class="card-container">
    <?php
    $site_url = site_url();
    // If we have results, show them
      if ($recipe_results) {
          while ($recipe_results = mysqli_fetch_assoc($results)) {
            //   echo '<p>' . $recipe_results['Recipe_name']; '</p>';
            echo 
            "
            <div class='card'>
                <a class='card-link' href='{$site_url}/recipe-details.php?Id={$recipe_results['Id']}'>
                    <img src='{$site_url}{$recipe_results['Image_path']}' class='card-img' alt='recipe-image'> 
                    <h5 class='card-title'>{$recipe_results['Recipe_name']}</h5>
                </a>
            </div>
           ";
          }
      }
    ?>
</div>

<?php include_once __DIR__ . '/_components/footer.php';