



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/web.css">
    <title>Login</title>
</head>

<body>
    <?php include 'header.php'?>

    <div class="mylogincard">

        

        <form method="post" action="admindashboard.php">
            <div class="imgscontainer">
                <img src="https://res.cloudinary.com/dlxwzl9nr/image/upload/v1620659915/facebookclone/f_logo_RGB-Hex-Blue_512_viv9wa.png"
                   alt="Avatar" class="avatar">
            </div>

            <div class="inputcontainer">
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>
              <br>
                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
              <span>  <input type="checkbox" checked="checked"> Remember me </span>
                 <br>
                <button class="loginbtn" type="submit">Login</button>
                
                <span class="psw"><a href="#">Forgot password?</a></span>

            </div>

            
                

        </form>


    </div>

    <?php include 'footer.php'?>
</body>

</html>