<?php
session_start();

$conn = mysqli_connect("sql110.epizy.com", "epiz_34261906", "OvH4AdJMs3S5z", "epiz_34261906_crocycledb2"); // change the last parameter in this to whatever your database's name is 

if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>
