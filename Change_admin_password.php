<?php
include("setting.php");
session_start();
if(!isset($_SESSION['aid']))
{
	header("location:AdminLogin.php");
}
$aid=$_SESSION['aid'];
$a=mysqli_query($al, "SELECT * FROM admin WHERE aid='$aid'");
$b=mysqli_fetch_array($a);
$name=$b['name'];
$pass=$b['password'];
$old=sha1($_POST['old']);
$p1=sha1($_POST['p1']);
$p2=sha1($_POST['p2']);
if($_POST['old']==NULL || $_POST['p1']==NULL || $_POST['p2']==NULL)
{
	//ASL Do Nothing
}
else
{
if($old!=$pass)
{
	$info="Incorrect Old Password";
}
elseif($p1!=$p2)
	{
		$info="New Password Didn't Matched";
	}
	else
	{
		mysqli_query($al, "UPDATE admin SET password='$p2' WHERE aid='$aid'");
		$info="Successfully Changed your Password";
	}

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Password</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="helloIndia" name="keywords">
    <meta content="By Quintet Coders" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Administrator</h6>
                <h1>Change Password</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-white" style="padding: 30px;">
                        <div id="success"></div>
                        <form method="post" action="">
                        <!-- <form name="sentMessage" id="contactForm" novalidate="novalidate" autocomplete="on"> -->
                            
                        <tr><td colspan="2" class="info" align="center"><?php echo $info;?></td></tr>
                            <div class="labels">
                            <input type="password" name="old" class="form-control p-4" id="subject"
                                    placeholder="Enter Old Password" required="required"
                                    data-validation-required-message="Please enter Old password" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="labels">
                                <input type="password" name="p1" class="form-control p-4" id="subject"
                                    placeholder="Enter New Password" required="required"
                                    data-validation-required-message="Please Enter New Password" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="labels">
                                <input type="password" name="p2" class="form-control p-4" id="subject"
                                    placeholder="Re-Enter New Password" required="required"
                                    data-validation-required-message="Please Re-Enter New Password" />
                                <p class="help-block text-danger"></p>
                            </div>
                            
                                <br>
                                <div class="text-center">
                                    <button class="btn btn-primary py-3 px-4" type="submit"
                                        id="sendMessageButton">Change Password</button>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="ahome.php" class="link">HOME</a>
</body>
</html>