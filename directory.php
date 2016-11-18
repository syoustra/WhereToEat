<?php
$pageTitle = "PHPickings";
include("inc/header.php");
include("inc/connection.php");

?>

<h1>What you've got to work with .....</h1>


<!-- SHOW LISTING OF RESTAURANT CHOICES -->


<?php

//CROSS-REFERENCING THE NUMBERS IN THE RESTAURANT TABLE TO THEIR MATCHING VALUES IN THE NEIGHBORHOOD & CUISINE TABLES
$fullListing = $db->query('SELECT * FROM restaurants 
	INNER JOIN neighborhood ON restaurants.neighborhood_id = neighborhood.neighborhood_id
	INNER JOIN cuisine ON restaurants.cuisine_id = cuisine.cuisine_id'
	);

echo "<table>";
//TABLE HEADINGS
echo "<thead><tr><td>Name</td><td>Neighborhood</td><td>Cuisine</td><td>NewToMe?</td><td></td></tr></thead>";
echo "<tbody>";


//FILL IN CONTENTS OF DATABASE
	while ($dir = $fullListing->fetch())
	{
		echo "<tr><td>" . $dir['rest_name'] . "</td><td>" . $dir['neighborhood_name'] . "</td><td>" . $dir['cuisine'] . "</td><td>" . $dir['new_to_me'] . "</td><td>Edit <a href='delete.php'>Delete</td></tr>";
	}

	echo "</tbody>";
	echo "</table>";



?>





<?php
include("inc/footer.php");

?>