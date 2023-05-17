<!-- This is the html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="Register.css">
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
                        <input style="border: none;" class="input-field" type="text" name="Username" id="Username" placeholder="Username" />
                    </div>

                    <br><br>

                    <div class="inputs">
                        <i class="fa fa-lock icon"></i>
                        <input style="border: none;" class="input-field" type="password" name="Passw" id="Passw" placeholder="Password" />
                    </div>

                    <div class="inputs">
                        <input type="text" class="Email" name="Email" id="Email" placeholder="Email" />
                    </div>

                    <!-- Considering this is a registration area, will we also add an Email section?
                    What text boxes should we add for the registration area.
                -->

                </form>

                <br><br>

                <input class="btn" type="button" name="log" id="log" value="L O G I N">

                <br><br>

                <input class="btn" type="submit" name="signin" id="signin" value="S I G N  U P ">

                <br><br>

            </div>
        </div>

    </div>
</body>

</html>