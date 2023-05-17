<!-- This is the php -->
<?php
// Start the session, this needs to be done before the first HTML tag

$conn = mysqli_connect("localhost","root","","crocycledb");

session_start();

if(isset($_POST["submit"])){


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

<!-- This is the html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="loginpage.css">
    <link rel="stylesheet" 
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


    <div class="bgclass">
    <div class ="logo">
      <img src="../Images/Logo/crocyclelogo.png" height="60%" width="60%"></img>
    </div>

    <div class="section">
       
        <div class="parallax">
            <img src="../Images/StockImages/parallimg.png" alt="Parallax Background"/>
        </div>

        <div class="inputsection">
             
            <h1>Crocycle</h1>

            <form class="inline" action="" method="post" autocomplete="off">
                
                <div class="inputs">
                    <i class="fa fa-user icon"></i>
                    <input style="border: none;" class="input-field" type="text" name="Username" id="Username" placeholder="Username"/>
                </div>

                <br><br>

                <div class="inputs">
                    <i class="fa fa-lock icon"></i>
                    <input style="border: none;" class="input-field" type="password" name="Passw" id="Passw" placeholder="Password"/>
                </div>

            </form>

            <br><br>

            <input class="btn" type="button" name="log" id="log" value="L O G I N">

            <br><br>

            <input class="btn" type="submit" name="signin" id="signin" value="S I G N  U P ">
            
            <br><br>
            <p>Forgot Password? <a href="#">Click here</a></p>

        </div>
    </div>

  </div>
</body>
</html>