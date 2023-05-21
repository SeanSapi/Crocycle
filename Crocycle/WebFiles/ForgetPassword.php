<!-- This is the php -->
<?php
// Start the session, this needs to be done before the first HTML tag

include 'connection.php';

if (!isset($_POST['username'], $_POST['email'], $_POST['updatepw'], $_POST['updatepw2'])) {
	// Could not get the data that should have been sent.
	$_SESSION["statMessage"] = "Please complete all forms!";
    header ("Location: ForgetPass.php");
    exit();
}


//if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['updatepw']) || empty($_POST['updatepw2'])){ // checks if any one of the three input fields is empty
    //exit('Please complete the registration form.');
//}

if($_POST['updatepw'] === $_POST['updatepw2']){ // check if the two password forms match
    

  if ($stmt = $conn->prepare('SELECT id, password FROM crocaccounts WHERE email = ?')) { // $stmt variable connects to database with a prepared statement
    // prepared statement selects the id and password from crocaccounts associated with a provided username parameter
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    // the username form will now be expecting a string value to be entered, minimizing the risk 
	$stmt->bind_param('s', $_POST['email']); // bind the username acquired from the POST to the prepared statement
	$stmt->execute(); // execute the prepared statement
	// Store the results of $stmt (which are the provided details run through the prepared statement) so we can check if the account exists in the database.
	$stmt->store_result();

    if ($stmt->num_rows > 0) { // checks if stmt's rows are greater than 0, means its found a result that matches the passed in parameter
        
        // code that runs if this user email exists
        if($stmt = $conn->prepare('UPDATE crocaccounts SET password = (?) WHERE email = ?')){
            

            $password = password_hash($_POST['updatepw'], PASSWORD_DEFAULT); // hash the updatepw POST and set to a variable
            $stmt->bind_param('ss', $password, $_POST['email']); // bind the three parameters of the prepared statement with the variable above, the username and email POSTs
            $stmt->execute(); // execute
            $_SESSION["statMessage"] = "Password changed!";
            header('Location: ../WebFiles/LoginPage.php'); // send the user on their merry way to Login.php 
            
            
        }else{
            //  somehow the SQL got an error here, check if the table has the account fields used in the if-statement.
	        $_SESSION["statMessage"] = "SQL Error. Please contact the developers for database fixes.";
            header ("Location: ForgetPass.php");
        }

    } else {
        $_SESSION["statMessage"] = "This email does not exist in our database.";
        header ("Location: ForgetPass.php");
        exit();
    }


	$stmt->close(); // close database connection
  }


} else{
    $_SESSION["statMessage"] = "Passwords do not match!";
    header ("Location: ForgetPass.php");
}


