
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tour details.helloIndia</title>
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
<?php
include("setting.php");
session_start();
if(!isset($_SESSION['aid']))
{
	header("location:admin.php");
}
$aid=$_SESSION['aid'];
$a=mysqli_query($al, "SELECT * FROM admin WHERE aid='$aid'");
$b=mysqli_fetch_array($a);
$name=$b['name'];
$n=$_POST['name'];
$am=$_POST['amount'];
if($n!=NULL && $am!=NULL)
{
	$sql=mysqli_query($al, "INSERT INTO holiday(name,amount) VALUES('$n','$am')");
	if($sql)
	{
		$info="Successfully Added";
	}
	else
	{
		$info="Package Name Already Exists";
	}
}
?>
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Administrator LogIn</h6>
                <h1>Manage Holiday Packages</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-white" style="padding: 30px;">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate" autocomplete="on">
                            
                            
                            <div class="control-group">
                                <input type="Text" class="form-control p-4" id="subject"
                                    placeholder="Enter Holiday Package Name" required="required"
                                    data-validation-required-message="Please enter Holiday Package Name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="Text" class="form-control p-4" id="subject"
                                    placeholder="Enter Ammount Per Member" required="required"
                                    data-validation-required-message="Please Ammount Per Member" />
                                <p class="help-block text-danger"></p>
                            </div>
                            
                                <br>
                                <div class="text-center">
                                    <button class="btn btn-primary py-3 px-4" type="submit"
                                        id="sendMessageButton">ADD</button>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Home</h6>
                <h1>Current Holiday Packages</h1>
            </div>
            <div class="row justify-content-center">
            <table border="0" cellpadding="5" cellspacing="5" class="design ashu">
                <tr class="labels ashu"><th class="ashu">Sr.No.</th><th class="ashu">Package Name</th><th class="ashu">Amount Per Member</th><th class="ashu">Delete</th></tr>
                    <?php
                        $u=1;
                        $x=mysqli_query($al, "SELECT * FROM holiday");
                        while($y=mysqli_fetch_array($x))
                        {
	                ?>
<tr class="labels">
<td class="ashu"><?php echo $u;$u++;?></td>
<td class="ashu"><?php echo $y['name'];?></td>
<td class="ashu"><?php echo "INR ".$y['amount'];?></td>
<td class="ashu"><a href="deleteH.php?del=<?php echo $y['id'];?>" class="link">Delete</a></td>
</tr>
<?php } ?>
</table>
            </div>
        </div>
    </div>
    <!-- Contact End -->
</body>
</html>