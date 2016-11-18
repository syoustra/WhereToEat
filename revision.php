<?php
$pageTitle = "PHParsing";
include("inc/header.php");
include("inc/connection.php");



echo "<h2>What would you like to change?</h2>";

?>
<!--ENTER FORM DATA HERE-->

<form>
  <div class="row">
    <div class="twelve columns">
      <label for="exampleRestaurantInput">Restaurant Name</label>
      <input class="u-full-width" type="email" placeholder="MyNextFavoriteFoodPlace" id="exampleRestaurantInput">
    </div>
    <div class="five columns">
      <label for="exampleCuisineInput">Cuisine</label>
      <select class="u-full-width" id="exampleCuisineInput">
      		<option value=''>Select ...</option>

<!--POPULATE CUISINE DROPDOWN LIST WITH DATABASE OPTIONS-->
      	<?php
      		$cuisineList = $db->query('SELECT cuisine FROM cuisine ORDER BY cuisine');
      		while($c=$cuisineList->fetch())
      		{
      			echo "<option value='$c[0]'> $c[0] </option>";
      		}
      	?>
      </select>

    </div>
    <div class="six columns">
      <label for="exampleNeighborhoodInput">Neighborhood</label>
      <select class="u-full-width" id="exampleNeighborhoodInput">
      		<option value=''>Select ...</option>
<!--POPULATE NEIGHBORHOOD DROPDOWN LIST WITH DATABASE OPTIONS-->
      	<?php
      		$neighborhoodList = $db->query('SELECT neighborhood_name FROM neighborhood ORDER BY neighborhood_name');
      		while($n=$neighborhoodList->fetch())
      		{
      			echo "<option value='$n[0]'> $n[0] </option>";
      		}
      	?>
      </select>
    </div>
  </div>
<!--   <label for="exampleMessage">Message</label>
  <textarea class="u-full-width" placeholder="Hi Dave …" id="exampleMessage"></textarea>
 -->  <label class="exampleNewToMe">
    <input type="checkbox">
    <span class="label-body">This place is new to me.</span>
  </label>
  <input class="button-primary" type="submit" value="Submit">
</form>






<?php

include("inc/footer.php");

?>