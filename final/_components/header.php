<?php

// if $page_title variable doesn't exist, create a default one
if (!isset($page_title)) {
    $page_title = '🚨 Missing Title 🚨';
}

$site_title = 'DelishDishes';
$document_title = $page_title . ' | ' . $site_title; // Home | DelishDishes

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $document_title ; ?></title>
  <link rel="icon" type="image/png" href="<?php echo site_url(); ?>/dist/images/favicon.png">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/styles/styles.css">
  <link rel="normalize" href="<?php echo site_url(); ?>/dist/styles/normalize.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

  <script src="https://cdn.tiny.cloud/1/ixbz2acyqjwee701vfb10g4pz207qultrubbzs5s9waymd01/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>

<header>
  <div class="logo-container">    
    <a class="logo" href="<?php echo site_url(); ?>/index.php">
        <h4><span class="delish-span">Delish</span></h4>
        <h4><span class="dishes-span">Dishes</span></h4>
    </a>
  </div>
    
  <ul class="menu-container" id="menu">
    <li class="menu-item">
      <a href="<?php echo site_url(); ?>/recipes.php" class="menu-item__link">Recipes</a>
    </li>

    <li class="menu-item">
      <a href="<?php echo site_url(); ?>/search.php" class="menu-item__link">Search</a>
    </li>

    <li class="menu-item">
      <a href="<?php echo site_url(); ?>/admin/recipes/index.php" class="menu-item__link">Account</a>
    </li>
  </ul>
  
  <div class="bar" id="bar">
    <div class="line-1"></div>
    <div class="line-2"></div>
    <div class="line-3"></div>
  </div>
</header>