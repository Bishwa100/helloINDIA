<?php
include("setting.php");
session_start();
if (isset($_SESSION['aid'])) 
{
    header("location:Welcome_admin.php");
}
$e = mysqli_real_escape_string($al, $_POST['aid']);
$p = mysqli_real_escape_string($al, $_POST['pass']);
if ($_POST['aid'] != NULL && $_POST['pass'] != NULL) 
{
    $pp = sha1($p);
    $sql = mysqli_query($al, "SELECT * FROM admin WHERE aid='$e' AND password='$pp'");
    if (mysqli_num_rows($sql) == 1) {
        $_SESSION['aid'] = $e;
        header("location:Welcome_admin.php");
    }
    else {
        $info = "Incorrect Admin ID or Password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ADMIN LOGIN</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>

    <div id="header">
        <div align="center">
        <!-- Sign in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>

                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Admin Login</h2>
                        <form method="post" action="">
                        <tr><td colspan="2" class="info" align="center"><?php echo $info;?></td></tr>
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" size="25" name="aid" class="fields" placeholder="User Name" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" size="25" name="pass" class="fields" placeholder="Enter Password" required="required" />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" value="Login" class="fields" />
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>