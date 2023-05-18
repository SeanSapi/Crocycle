<?php // this file will be used by LoginPage.php in its login form
session_start();
// Try to connect using this info
$conn = mysqli_connect("localhost", "root", "", "crocycledb");

if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (!isset($_POST['username'], $_POST['password']) ) { // checks if username and password are not set
	// displays appropriate message to user
	exit('Please fill both the username and password fields!');
}

if ($stmt = $conn->prepare('SELECT id, password FROM crocaccounts WHERE username = ?')) { // $stmt variable connects to database with a prepared statement
    // prepared statement selects the id and password from crocaccounts associated with a provided username parameter
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    // the username form will now be expecting a string value to be entered, minimizing the risk 
	$stmt->bind_param('s', $_POST['username']); // bind the username acquired from the POST to the prepared statement
	$stmt->execute(); // execute the prepared statement
	// Store the results of $stmt (which are the provided details run through the prepared statement) so we can check if the account exists in the database.
	$stmt->store_result();


    if ($stmt->num_rows > 0) { // checks if stmt's rows are greater than 0
        $stmt->bind_result($id, $password); // bind the results of $stmt to variables for id and password
        $stmt->fetch(); 
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (password_verify($_POST['password'], $password)) { // checks if the netered password from the POST is verified using the pre-existing password value from the database
            // successfully verified the entered credentials, log the user in
            // Create sessions, so any page who needs to know the user is logged in, knows the data on the server.
            session_regenerate_id(); // regenerate id for this session
            $_SESSION['loggedin'] = TRUE; // set a session cookie for loggedin to true
            $_SESSION['name'] = $_POST['username']; // set a session cookie for the name to the POST's username value
            $_SESSION['id'] = $id; // set session id to the $id variable
            header('Location: ../WebFiles/index.php'); // send the user on their merry way to index.php (this is the home screen)
        } else {
            // code that runs if the password is WRONG
            echo 'Incorrect password.'; // input message to user
        }
    } else {
        // code that runs if the username is WRONG
        echo 'Incorrect username.';
    }


	$stmt->close(); // close database connection
}

?>