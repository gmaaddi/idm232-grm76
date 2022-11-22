<?php

/**
 * get all users from the database
 * @return object - mysqli_result
 */
function get_recipes()
{
    global $db_connection;
    $query = 'SELECT * FROM recipes';

    $result = mysqli_query($db_connection, $query);
    return $result;
}

/**
 * Insert a user into the database
 * @param  string $first_name - first name of the user
 * @param  string $last_name - last name of the user
 * @param  string $email - email of the user
 * @param  string $phone - phone number of the user
 * @return object - mysqli_result
 */
function add_recipe($Recipe_name, $Level, $Servings, $Prep_time, $Cook_time, $Total_time, $Image_path, $Ingredients, $Directions)
{
    global $db_connection;
    $query = 'INSERT INTO recipes';
    $query .= ' (Recipe_name, Level, Servings, Prep_time, Cook_time, Total_time, Image_path, Ingredients, Directions)';
    $query .= " VALUES ('$Recipe_name', '$Level', '$Servings', '$Prep_time', '$Cook_time', '$Total_time', '$Image_path', '$Ingredients', '$Directions')";

    $result = mysqli_query($db_connection, $query);
    // echo $result;
    return $result;
}