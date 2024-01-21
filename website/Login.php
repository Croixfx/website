<?php
include("connect.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <style>
            body{
    padding: 0;
    margin: 0;
    text-align: center;
    background: #181a20;
background-size: cover;
background-position: center;
font-family: "poppins",sans-serif;
margin-top: 0px;
}
.input-box{
    margin-bottom: 35px;
    padding-left: 30px;
}
.register{
    margin-top: 5px;
    margin-left: 33px;
    margin-right: -35px;
}
.forgotten-password{
    margin-left: 40px;
}
.login{
    margin-right:-25px;
}
a{
    color: #fcd535;
    text-decoration: none;
}
a:hover{
   color: rgb(255, 0, 0);
   text-decoration: none;
}
a:active{
color: magenta;
text-decoration: none;
}
a:after{
    color: #31F53E;
    text-decoration: none;
}
h1{
    background: rgba(0,255,255,0.19);  
}
        </style>
</head>
        <body>
   
        <h1 style="color:rgba(255, 255, 0,0.8);margin-top: 0px;padding-top: 2cm;padding-bottom: 2cm;">
            Welcome to Troubleshouting Tutorials</h1>
        <h2 style="color:rgba(255,255,255,0.8);margin-right: 8cm;" ><b>Log In</b></h2>
<form action="loginlogic.php" method="post">
        <div class="input-box">
            <input type="Email" placeholder="Email" name="email" style="width:10cm ;height: 1cm;text-align: center;font-size: larger;" required="required"/>
            <i style="color: aliceblue;" class='bx bxs-user-check'></i>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Password" name="password" style="width:10cm ;height: 1cm;text-align: center;font-size: larger;" required="required">  
            <i style="color: aliceblue;" class='bx bx-lock'></i>
        </div>
        <div class="forgotten-password">
            <input type="submit"value="LOGIN" class="login" name="login" required title="click me to log in" style="margin-left: 5.2cm; width: 3.5cm;height: 1cm;font-size: x-large;background: #fcd535;">
        </div>
           <div class="forgotten-password" > <label><input type="checkbox" style="margin-left: 55px;"><span style="color: rgba(255, 255, 255,0.8);margin-right: 7cm;">Remember my password </span></label>
            
            <div style="margin-top: 25px;"> 
                <p style="color:#fcd535 ; margin-left: 50px;margin-right: 2cm;" class="register"><a href="Signup.php">Don't have a registered account? Create new account</a></p>
            </div>
        </div>

      </div> 
</form> 
      <br >
    </body>
</html>