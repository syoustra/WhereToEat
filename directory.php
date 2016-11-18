<?php
$pageTitle = "PHPickings";
include("inc/header.php");
include("inc/connection.php");

?>

<h1>What you've got to work with .....</h1>


<!-- SHOW LISTING OF RESTAURANT CHOICES -->


<?php


$fullListing = $db->query('SELECT * FROM restaurants');

echo "<table>";
	while ($dir = $fullListing->fetch())
	{
		echo "<tr><td>" . $dir['rest_name'] . "</td><td>" . $dir['neighborhood_id'] . "</td><td>" . $dir['cuisine_id'] . "</td><td>" . $dir['new_to_me'] . "</td></tr>";
	}

	echo "</table>";



?>





<?php
include("inc/footer.php");

?>