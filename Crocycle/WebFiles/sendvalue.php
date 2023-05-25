<?php 

include 'connection.php';

//Take the data from the button and bring it here

echo $_POST["ProductID"];

$_SESSION["Req"] = intval($_POST["ProductID"]);


header("Location: ProductPage.php");

?>