<?php
session_start();
?>
<!-- This is the html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="ForgetPass.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


    <div class="bgclass">


        <div class="logo" style="transform: translate(0, 80px);">
            <img src="../Images/Logo/crocyclelogo.png"></img>
        </div>

        <div class="section">

            <div class="inputsection">


                <form class="inline" action="ForgetPassword.php" method="post" autocomplete="off">

                    <div class="inputs">
                        <i class="fa fa-user icon"></i>
                        <input style="border: none;" class="input-field" type="text" name="username" id="username"
                            placeholder="Enter Username" required />
                    </div>

                    <br>

                    <div class="inputs">
                        <i class="fa fa-user icon"></i>
                        <input style="border: none;" class="input-field" type="text" name="email" id="email"
                            placeholder="Enter Email" required />
                    </div>

                    <br><br>

                    <div class="inputs">
                        <i class="fa fa-lock icon"></i>
                        <input style="border: none;" class="input-field" type="password" name="updatepw" id="updatepw"
                            placeholder="Enter New Password" required />
                    </div>

                    <br>


                    <div class="inputs">
                        <i class="fa fa-lock icon"></i>
                        <input style="border: none;" class="input-field" type="password" name="updatepw2" id="updatepw2"
                            placeholder="Re-Enter Password" required />
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
                    <br>

                    <input class="btn" type="submit" name="confirm" id="confirm" value="C O N F I R M">

                </form>





            </div>
        </div>

        <br><br>
        <br><br>

    </div>
</body>

</html>