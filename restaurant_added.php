<?php
$pageTitle = "PHPost";
include("inc/header.php");
include("inc/connection.php");


var_dump($_POST);

//CHECK TO ENSURE THAT THE FORM WAS ACTUALLY FILLED OUT IN ITS ENTIRETY
if (!isset($_POST['RestaurantInput']) || !isset($_POST['CuisineInput']) || !isset($_POST['NeighborhoodInput']) ) 
{
	echo "<p>Please go back and fill out the form completely.</p>";
	exit;
} else {echo "Thanks!";}


// $name = htmlspecialchars(trim($_POST['RestaurantInput']));
// $cuisine = 
// $neighborhood = 
// $newToMe = 



include("inc/footer.php");

?>