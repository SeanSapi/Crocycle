<?php declare(strict_types=1);

include "../connection.php";

$req = $_SESSION["Req"];
$Amount = intval($_POST["quantity"]);
$Size = $_POST["ItmSize"];

$Products = "SELECT id, name, price, quantity, img FROM cartitems WHERE id = $req";

$result = mysqli_query($conn, $Products);

$item = $result->fetch_assoc();

$ItmQnt = intval($item["quantity"]);

$ItmPrc = floatval($item["price"]);

function newArray( string $name, string $img, string $ItmSize , int $qnt, float $price) {
    if (!isset($_SESSION["NewItems"])) {
        $_SESSION["NewItems"] = array(
            array($name, $img, $ItmSize , intval($qnt), floatval($price))
        );
    }
    else {
        array_push($_SESSION["NewItems"], array($name, $img, $ItmSize , intval($qnt), floatval($price)));
    };
};

newArray($item["name"],$item["img"], $Size ,$Amount, $ItmPrc);

$item = $result->fetch_assoc();

header('ProductPage.php');
// Commented line to check for product items in the array
// var_dump($_SESSION["NewItems"]);

// Commented line to delete the list of items 
// $_SESSION["NewItems"] = array_diff($_SESSION["NewItems"], $_SESSION["NewItems"]);
?>