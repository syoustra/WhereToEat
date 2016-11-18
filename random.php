<?php
$pageTitle = "PHPrediction";
include("inc/header.php");
include("inc/connection.php");


?>
<h1>EAT UP!!!!!</h1>

<!--SHOW RANDOM RESTAURANT SELECTION HERE-->
<!--Google tells me there are faster/better ways of doing this. By the time the database gets big enough for those concerns to be an issue, I should be able to understand and implement them.-->

<?php 
$random = $db->query('SELECT cuisine FROM cuisine ORDER BY RAND() LIMIT 1')->fetch();
print "$random[0]";

?>

<?php include("inc/footer.php"); ?>