<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>sign up page made by helloIndia</title>
  

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
     
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
  
    background-image: url(img/pexel5.jpg);
    background-repeat: no-repeat;
    height:100%;
    width: 100%;
    
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
    margin-top: 150px;
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

    </style>
</head>
<body>
<form action="process_signup.php" method="post" novalidate>    
    <form>
        <h3><span id="Hello">hello</span>INDIA</h3>
        <h5>Sign Up</h5>

        <label for="username">Enter Username</label>
        <input type="text" placeholder="Username" name="name" id="username" required>

        <label for="username">Enter Email</label>
        <input type="email" placeholder="Email" name="email" id="username" required>

        <label for="password">Enter Password</label>
        <input type="password" placeholder="Password" name="password" id="password" required>

        <label for="password"> Re-Enter Password</label>
        <input type="password" placeholder="Password"  name="re_pass" id="password" required>
       <br><br>
        <div class="form-group form-button">
             <div class="g-recaptcha" data-sitekey="6LcjZvchAAAAAPWjXT5I0en8iglAJnPB0nT8opr5"></div><br>
            <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
        </div>
        <br>

        
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
