<?php

$is_invalid = false;

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();

    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            $_SESSION["user_id"] = $user["id"];
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location:index1.php");
            exit;
        }
    }

    $is_invalid = true;

}


?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login page</title>
  

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Login page</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
  
    background-image: url(img/photo13.jpg);
    background-repeat: no-repeat;
    height: auto;
    width: auto;
    
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    
    height: auto;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: white;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size:44px;
    font-weight: 600;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: white;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: yellowgreen;
    color: White;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}
#signup{
    margin-top:10px;
    width: 100%;
    background-color: yellowgreen;
    color: White;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
    height: 55px;
}
#Hello{
    color: yellowgreen;
}
form h5{
    
    text-align: center;
    font-size: 20px;
    margin-top: 15px;
}
#signin{
    margin-top:30px;
    width: 100%;
    background-color: yellowgreen;
    color: White;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
    height: 55px;
}

    </style>
</head>
<body>
                            <form method="post">
        <h3><span id="Hello">hello</span>INDIA</h3>
        <h5>Log In</h5>
        <?php if ($is_invalid): ?>
                            <em>Invalid login</em>
                        <?php endif; ?>

                        <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your email"/
                                value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
        <div class="form-group form-button">
        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
        </div>
        <label for="password">Don't have Any Account?</label>
        <a href="signup.php" style="text-decoration: none">
            <input id="signup" type="button" value="Sign Up">
            </a>
            <div class="social">
          <div class="go"><i class="fab fa-google"></i> <a href="https://www.google.com" style="text-decoration: none"> Google</a></div>
          <div class="fb"><i class="fab fa-facebook"></i>  <a href="https://www.facebook.com" style="text-decoration: none"> Facebook</a></div>
        </div>
    </form>
</body>
</html>
<!-- partial -->
  
</body>
</html>
