<?php 

include "connection.php";

if(!isset($_POST['clear'])){
    
    header('Location: ../WebFiles/Cart.php');
} else{
    
    $_SESSION["NewItems"] = array_diff($_SESSION["NewItems"], ($_SESSION["NewItems"])); 
    header('Location: ../WebFiles/Cart.php');
}


?>