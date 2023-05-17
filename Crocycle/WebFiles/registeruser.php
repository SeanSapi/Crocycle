<!-- This is the php -->
<?php
// Start the session, this needs to be done before the first HTML tag

$conn = mysqli_connect("localhost", "root", "", "crocycledb");

session_start();

if (isset($_POST["submit"])) {


    $user = $_POST["user"];
    $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);


    $query = "INSERT INTO users VALUES('$user', '$pass')";
    mysqli_query($conn, $query);
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php

// save session cookies  if there aren't any (NULL)
if (!empty($_POST['user']) && !empty($_POST['pass'])) {
    $_SESSION["user"] = $_POST["user"];
    $_SESSION["pass"] = $_POST["pass"];
    echo "Session variables are set.";
}
?>