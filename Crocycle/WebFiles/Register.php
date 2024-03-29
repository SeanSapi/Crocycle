<?php
session_start();
if (isset($_SESSION['loggedin'])) {
    header('Location: ../../index.php'); // redirect to login page
    exit;
}

?>
<!-- This is the html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../WebFiles/Register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="bgclass">
        <div class="logo">
            <img src="../Images/Logo/crocyclelogo.png" height="60%" width="60%"></img>
        </div>

        <div class="section">

            <div class="parallax">
                <img src="../Images/stockImages/parallimg.png" alt="Parallax Background" />
            </div>

            <div class="inputsection">

                <h1>Register</h1>

                <form class="inline" action="PurePHP/registeruser.php" method="post" autocomplete="off">

                    <div class="inputs">
                        <i class="fa fa-user icon"></i>
                        <input style="border: none;" class="input-field" type="text" name="username" id="username"
                            placeholder="Username" />
                    </div>

                    <div class="inputs">
                        <i class="fa fa-lock icon"></i>
                        <input style="border: none;" class="input-field" type="password" name="password" id="password"
                            placeholder="Password" />
                    </div>

                    <div class="inputs">
                        <i class="fa fa-envelope"></i>
                        <input style="border: none;" type="text" class="email" name="email" id="email"
                            placeholder="Email" />
                    </div>

                    <p>
                        <?php

                        if (!isset($_SESSION["statMessage"])) {
                            echo ' ';
                        } else {
                            echo $_SESSION["statMessage"];
                            $_SESSION["statMessage"] = null;
                        }
                        ?>
                    </p>

                    <input class="btn" type="submit" name="sign" id="sign" value="S I G N  U P">

                    <a href="../WebFiles/LoginPage.php"><p>Return to Login</p></a>


                </form>

                <br><br>

                <br><br>


            </div>
        </div>

        <br><br>
        <br><br>
    </div>
</body>

</html>