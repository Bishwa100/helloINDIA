<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adimistrator</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style2.css">
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

    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image" height="600px" width="300px"></figure>
                       
                    </div>

                    <div class="signin-form">
                        <h1 class="form-title">Welcome Admin</h1><br>
                        <h3 class="form-title">Please Choose Your Action</h3><br><br>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                            <a class="h5 text-decoration-none" href="holiday.php"><span class="dot"></span> Manage holiday Packages</a>
                            </div><br>
                            <div class="form-group">
                            <a class="h5 text-decoration-none" href="Change_admin_password.php"><span class="dot"></span> Change Password</a>
                            </div><br>
                            <div class="form-group">
                            <a class="h5 text-decoration-none" href=""><span class="dot"></span> Orders</a>
                            </div><br>
                            <a class="h5 text-decoration-none" href="logout.php"><span class="dot"></span> Logout</a>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>
    </div>

    <a href="AdminLogin.php" class="link">BACK</a>
</body>
</html>
<style>.dot {
  height: 6px;
  width: 6px;
  background-color: black;
  border-radius: 50%;
  display: inline-block;
}</style>