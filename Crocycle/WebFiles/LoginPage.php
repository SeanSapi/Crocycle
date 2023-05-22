<?php
session_start();
if (isset($_SESSION['loggedin'])) {
    header('Location: Index.php'); // redirect to index page
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
    <title>Log In</title>
    <link rel="stylesheet" href="../WebFiles/loginpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


    <div class="bgclass">
        <div class="logo">
            <img src="../Images/Logo/crocyclelogo.png" height="60%" width="60%"></img>
        </div>

        <div class="section">

            <div class="parallax">
                <img src="../Images/StockImages/parallimg.png" alt="Parallax Background" />
            </div>

            <div class="inputsection">

                <h1>Crocycle</h1>

                <form class="inline" action="auth.php" method="post" autocomplete="off">

                    <div class="inputs">
                        <i class="fa fa-user icon"></i>
                        <input style="border: none;" class="input-field" type="text" name="username" id="username"
                            placeholder="Username" required />
                    </div>
                    <br>

                    <div class="inputs">
                        <i class="fa fa-lock icon"></i>
                        <input style="border: none;" class="input-field" type="password" name="password" id="password"
                            placeholder="Password" required />
                    </div>

                    <input class="btn" type="submit" name="log" id="log" value="L O G I N">

                </form>

                <p id="invData">
                    <!-- hidden element for "invalid data" -->
                    <?php

                    if (!isset($_SESSION["statMessage"])) {
                        echo ' ';
                    } else {
                        echo $_SESSION["statMessage"];
                        $_SESSION["statMessage"] = null;
                    }
                    ?>
                </p>

                <p>Don't have an account? <a href="Register.php">Click here to Register</a></p>

                <p>Forgot Password? <a href="ForgetPass.php">Click here to Reset</a></p>

            </div>
        </div>
        <br><br>
        <br><br>
    </div>
</body>

</html>