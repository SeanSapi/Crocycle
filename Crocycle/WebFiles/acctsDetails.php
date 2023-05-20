<?php
// We need to use sessions, so you should always start sessions using the below code.

include 'connection.php';
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
// We don't have the password or email info stored in sessions, so instead, we can get the results from the database.
//$stmt = $conn->prepare('SELECT password, email FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
//$stmt->bind_param('i', $_SESSION['id']);
//$stmt->execute();
//$stmt->bind_result($password, $email);
//$stmt->fetch();
//$stmt->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Details</title>
    <link rel="stylesheet" href="Details.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    

</head>

<body>


    <div class="bgclass">

        <div class="section">


            <div class="inputsection">

                <h1> Account Details </h1>

                <form class="user" action="" method="post" autocomplete="off"> <!-- username and profile picture -->

                    <span class="userstuff">
                        <img class="pfp" src="../Images/ourTeam/sean.png">
                        <div class="pfptxt">
                            <h2> CHANGE </h2>
                        </div>
                    </span>

                    <div class="username-section">

                        <div>
                           Welcome, <?=$_SESSION['name']?>
                        </div>

                        <br>

                        <div class="inputs userSpc">
                            <i class="fa fa-user icon"></i>
                            <input style="border: none;" class="input-field" type="text" name="Username" id="Username"
                                placeholder="Change Username..." />

                        </div>
                    </div>
                </form>



                <div>


                    <form class="inline" action="" method="post" autocomplete="off">
                        <!-- form class for password and -->

                        <br><br>

                        <div class="passTex">


                            <div>

                                Password:

                            </div>


                            <div class="inputs word">
                                <i class="fa fa-lock icon"></i>
                                <input style="border: none;" class="input-field" type="password" name="Passw" id="Passw"
                                    placeholder="Password" />
                            </div>






                        </div>

                        <div class="passTex">
                            <div>

                                DOB:

                            </div>


                            <div class="inputs dob">
                                <form> <!-- Date of birth -->
                                    <input type="date" class="input-field" name="DoB">

                                </form>
                            </div>


                        </div>

                        <br><br>
                        <div class="signStat">

                            <a href="../WebFiles/Index.php">
                                <input class="btn" type="submit" name="signin" id="signin" value="BACK">
                            </a>
                            

                            <a href="../WebFiles/PurePHP/logout.php">
                                <input class="btn" type="submit" name="signout" id="signout" value="LOG OUT">
                    

                            </a>
                        </div>

                </div>

            </div>
</body>

</html>