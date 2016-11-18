# WhereToEat

Random Restaurant Picker -- PHP Project for Code Louisville

A bare-bones answer to the perennial question of "Where Should We Eat Tonight?" ... randomly selecting a restaurant from a previously-populated database
Further development will bring more in-depth searchable information to the database (as roughly sketched in the Project_Outline), as well as fixing the Edit and Delete options



To test this application:
*	Install xampp (or other local php test server)
*	Clone the repository to your own machine into the appropriate directory (for example, xampp/htdocs/)
*	Import the restaurantDB.sql database (for example, via phpMyAdmin)


Database access:
*	The file is restaurantDB.sql, in the root folder
*	The PDO connection is the inc folder
*	Create an appropriate credentials.php file in the inc folder for your particular system


Current batch of issues/curiosities...
*	All restaurants are added to the database and subject to random selection, but don't show up in directory
* Can't get dropdown boxes converted back to the ids needed for the database entry
