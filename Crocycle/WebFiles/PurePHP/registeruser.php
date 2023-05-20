<!-- This is the php -->
<?php
// Start the session, this needs to be done before the first HTML tag

include '../connection.php';

if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!');
}

if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])){ // checks if any one of the three inpuit fields is empty
    exit('Please complete the registration form');
}


if ($stmt = $conn->prepare('SELECT id, password FROM crocaccounts WHERE username = ?')) { // $stmt variable connects to database with a prepared statement
    // prepared statement selects the id and password from crocaccounts associated with a provided username parameter
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    // the username form will now be expecting a string value to be entered, minimizing the risk 
	$stmt->bind_param('s', $_POST['username']); // bind the username acquired from the POST to the prepared statement
	$stmt->execute(); // execute the prepared statement
	// Store the results of $stmt (which are the provided details run through the prepared statement) so we can check if the account exists in the database.
	$stmt->store_result();


    if ($stmt->num_rows > 0) { // checks if stmt's rows are greater than 0, means its found a result that matches the passed in parameter
        echo 'This username already exists, please choose another.';
    } else {
        // code that runs if there is no existing username already
        if($stmt = $conn->prepare('INSERT INTO crocaccounts (username, password, email) VALUES (?, ?, ?)')){
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
            $stmt->execute();

            session_regenerate_id(); // regenerate id for this session
            $_SESSION['loggedin'] = TRUE; // set a session cookie for loggedin to true
            $_SESSION['name'] = $_POST['username']; // set a session cookie for the name to the POST's username value
            $_SESSION['id'] = $id; // set session id to the $id variable
            header('Location: ../index.php'); // send the user on their merry way to index.php (this is the home screen)

            echo 'User Registered. Logging In...';
        }else{
            // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	        echo 'Could not prepare statement!';
        }
    }


	$stmt->close(); // close database connection
}








if (isset($_POST["submit"])) {


    $user = $_POST["user"];
    $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);
    $email = $_POST["email"];
    


    $query = "INSERT INTO users VALUES('$user', '$pass', '$email')";
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