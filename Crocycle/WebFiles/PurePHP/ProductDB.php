<?php declare(strict_types=1);

include "../connection.php";

$req = $_SESSION["IDReq"];

$Products = "SELECT id, name, price, quantity, img FROM cartitems WHERE id = $req";

$result = mysqli_query($conn, $Products);

$item = $result->fetch_assoc();

$ItmQnt = intval($item["quantity"]);

$ItmPrc = floatval($item["price"]);

function newArray( string $name, string $img, int $qnt, float $price) {
    if (isset($_SESSION["NewItems"])) {
        $_SESSION["NewItems"] = array(
            array($name, $img, intval($qnt), floatval($price))
        );
    }
    else {
        array($name, $img, $qnt, $price);
    };
};

newArray($item["name"],$item["img"],$ItmQnt,$ItmPrc);

$item = $result->fetch_assoc();

// Commented line to delete the list of items 
// $_SESSION["NewItems"] = array_diff($_SESSION["NewItems"], $_SESSION["NewItems"]);
?>