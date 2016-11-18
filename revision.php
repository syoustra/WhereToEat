<?php
$pageTitle = "PHParsing";
include("inc/header.php");


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
      <label for="exampleNeighborhoodInput">Cuisine</label>
      <select class="u-full-width" id="exampleNeighborhoodInput">
        <option value="Option 1">Italian</option>
        <option value="Option 2">Pizza</option>
        <option value="Option 3">Pasta</option>
      </select>
    </div>
    <div class="six columns">
      <label for="exampleNeighborhoodInput">Neighborhood</label>
      <select class="u-full-width" id="exampleNeighborhoodInput">
        <option value="Option 1">Highlands</option>
        <option value="Option 2">Not-Highlands</option>
        <option value="Option 3">Ummm.....what's left?</option>
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




Restaurant Name: <input type="text" name="name">
</form>



<?php

include("inc/footer.php");

?>