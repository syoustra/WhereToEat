<?php

//CREATE AND CORRECTLY ASSIGN CREDENTIALS IN THE FOLLOWING FILE
require("credentials.php");

//Making the database connection securely, without transmitting my own personal credentials
//Gives an error message if/when it cannot connect

try{
	$db = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

echo "Database connection made";

} catch (Exception $e) {
	echo "Unable to connect";
	echo $e->getMessage();
	exit;
}
