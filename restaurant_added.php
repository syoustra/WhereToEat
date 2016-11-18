<?php
$pageTitle = "PHPost";
include("inc/header.php");
include("inc/connection.php");


//var_dump($_POST);

//CHECK TO ENSURE THAT THE FORM WAS ACTUALLY FILLED OUT IN ITS ENTIRETY

// **************************MOOT POINT, ONCE I ALLOWED NULL RESPONSES IN AN ATTEMPT TO GET FORM TO WORK WITH DIRECTORY*****************
if (!isset($_POST['RestaurantInput']) || !isset($_POST['CuisineInput']) || !isset($_POST['NeighborhoodInput']) ) 
{
	echo "<p>Please go back and fill out the form completely.</p>";
	exit;
} else {echo "Thanks!";}



$fullListing = $db->query('SELECT * FROM restaurants 
	INNER JOIN neighborhood ON restaurants.neighborhood_id = neighborhood.neighborhood_id
	INNER JOIN cuisine ON restaurants.cuisine_id = cuisine.cuisine_id'
	);




//SANITIZING THE RESTAURANT NAME
$name = htmlspecialchars(trim($_POST['RestaurantInput']));


//SIMPLIFYING THE NAMES
//CONVERTING NEIGHBORHOOD & CUISINE NAMES TO NUMBERS

$CuisineInput = $_POST['CuisineInput'];
 echo $CuisineInput;




$cuisineConvert = $db->query('SELECT cuisine_id FROM cuisine WHERE cuisine = "$CuisineInput"');
// echo $cuisineConvert;

$cuisine = $cuisineConvert->fetch();
 echo $cuisine;
//$cuisine = (SELECT cuisine_id FROM cuisine WHERE cuisine = $_POST['CuisineInput']);



$neighborhood = $_POST['NeighborhoodInput'];

//$newToMe = $_POST['NewToMeInput'];

//var_dump($name, $cuisine, $neighborhood, $newToMe);


//ADDING RESTAURANT TO THE DATABASE
$query = "INSERT INTO restaurants (rest_name, neighborhood_id, cuisine_id) VALUES (?, ?, ?)";
$add_rest = $db->prepare($query);

$add_rest->bindParam(1, $name);
$add_rest->bindParam(2, $neighborhood);
$add_rest->bindParam(3, $cuisine);
// $add_rest->bindParam(4, $newToMe);
$add_rest->execute();



//CONFIRMS (OR NOT) THE ADDITION
if ($add_rest->rowCount() > 0) {
	echo "<p>Restaurant successfully added!</p>";
} else {
	echo "<p>There has been an error; the restaurant has not been added.</p>";
}




include("inc/footer.php");

?>