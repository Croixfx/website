<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="stylehome.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    
</head>
<body>
  <style>
    
   *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
} 
body{
    background-image: url(istockphoto-1414981473-1024x1024.jpg);
    background-size: cover;
    background-position: center;
    font-family:sans-serif;
}
.menu-bar
{
    background: rgb(0,100,0);
    text-align: center; 
}
.menu-bar ul
{
    display: inline-flex;
    list-style: none;
    color: #fff;
}
.menu-bar ul li
{
    
    width: 150px;
    margin: 30px;
    margin-top: 0px;
    padding: 50px;
    margin-bottom: 0px;
 

}
.menu-bar ul li a
{
    text-decoration: none;
    color: #fff;
}
.active, .menu-bar ul li:hover
{
    background: #2bab0d;
    border-radius: 3px;
}
ul
{
    margin-bottom: 8px;
}
.sub-menu-1
{
    display: none;
}
.menu-bar ul li:hover .sub-menu-1
{
display: block;
position: absolute;
background: rgb(0,100,0);
margin-top: 15px;
margin-left: -15px;
}
.menu-bar ul li:hover .sub-menu-1 ul
{
    display: block;
    margin: 10px;
}
.menu-bar ul li:hover .sub-menu-1 ul li
{
    width: 200px;
    padding: 10px;
    border-bottom: 1px dotted #fff ;
    background: transparent;
    border-radius: 0;
    text-align: left;
    border-bottom-width: 0.6px ;

}
.menu-bar ul li:hover .sub-menu-1 ul li:last-child
{
    border-bottom: none;
}
.menu-bar ul li:hover .sub-menu-1 ul li a:hover
{
    color: #2bff00;
}
.sub-menu-2
{
    display: none;
}
.hover_me:hover .sub-menu-2
{
position: absolute;
display: block;
margin-top: -40px;
margin-left: 140px;
background-color: rgb(0,100,0);
}
#home .active
{
color: rgb(0,100,0);
}
.example
{
  margin-top: 30px;
padding-left: 100px;
padding-top: 12px;
text-align: center;
font-size: 10px;
}
.example-1
{
    width: 100px;
    height: 50px;
    cursor: pointer;
    background: transparent;
    border: 2px solid #fff;
    color: #efefef;
    border-radius: 30px;
    padding: 10px 30px;
    font-size: 15px;

}
.Our-mission
{
    color: rgb(154, 146, 146);
    text-align: center;
    list-style: none;
    background: #332;
    padding-bottom: 50px;

}
.Our-mission p
{
    color: #efefef;
}
.footer
{
    margin-top: 30px;
    width: 100%;
    padding: 100px 15%;
    background: #333;
    color: #efefef;
    display: flex;
}
.footer div
{
    text-align: center;
}
.col-2
{
    flex-grow: 2;
}
.footer div h3
{
    font-weight: 300;
    margin-bottom: 30px;
    letter-spacing: 1px;

}
.col-1 a{
    display: block;
    text-decoration: none;
    color: #efefef;
    margin-bottom: 10px;
}
form input
{
    width: 400px;
    height: 40px;
    border-radius: 4px;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 40px;
   outline: none;
   border: none; 
}
form button
{
    background: transparent;
    border: 2px solid #fff;
    color: #efefef;
    border-radius: 30px;
    padding: 10px 30px;
    font-size: 15px;
    cursor: pointer;
}
.social-icon
{
    margin-top: 30px;
}
.social-icon i
{
    font-size: 25px;
    margin: 3px;
    cursor: pointer;
}
    </style>
    <div class="menu-bar">
  <ul>
    <li><a href class="active"><i class='bx bx-home'>Home</i></a></li>
    <li><a href="#"><i class='bx bx-laptop'>Computer Services</i></a>
    <div class="sub-menu-1">
      <ul>
        <li class="hover_me"><a href="#">Written Tutorials&nbsp;</a><i class='bx bxs-chevron-right'></i>
          <div class="sub-menu-2">
            <ul>
              <li><a href="#">PC</a></li>
              <li><a href="#">Desktop</a></li>
              <li><a href="#">Tablet</a></li>
            </ul>
          </div> 
        </li>
        <li class="hover_me"><a href="#">Video Tutorials&nbsp;</a><i class='bx bxs-chevron-right'></i>
          <div class="sub-menu-2">
            <ul>
              <li><a href="#">PC</a></li>
              <li><a href="#">Desktop</a></li>
              <li><a href="#">Tablet</a></li>
            </ul>
          </div> 
        </li>
      </ul>
    </div>
    </li>
<li><a href="#"><i class='bx bxs-user' >Mobile Services</i></a>
  <div class="sub-menu-1">
    <ul>
      <li  class="hover_me"><a href="Mobile.html">Written Tutorials&nbsp;</a><i class='bx bxs-chevron-right'></i>
      <div class="sub-menu-2">
        <ul>
          <li><a href="Android.php">Android</a></li>
          <li><a href="Ios.php">Ios</a></li>
          <li><a href="KaiOS.php">KaiOS</a></li>
        </ul>
      </div>
      </li>
      <li class="hover_me"><a href="#">Learn by Videos&nbsp;&nbsp;</a><i class='bx bxs-chevron-right'></i>
        <div class="sub-menu-2">
          <ul>
            <li><a href="#">Android</a></li>
            <li><a href="#">Ios</a></li>
            <li><a href="#">Apple</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</li>
<li><a href="Contact us.php"><i class='bx bxs-phone-call' >Contact&nbsp;Us</i></a></li>
<li><a href="#"><i class='bx bxs-user-plus' >Profile</i></a>
  <div class="sub-menu-1">
    <ul>
      <li  class="hover_me"><a href="Login.php">Login</a></li>
        <li  class="hover_me"><a href="Signup.php">Sign Up</a></li>
      </ul>
  </div>
</li>
<li><a href="#"><i class='bx bxs-user-plus' >Menu</i></a>
    <select name="menu" id="menu">
      <option value="computer"><a href="#">Computer Services</a></option>
      <a href="Mobile.html"><option value="mobile">Mobile Services</option></a>
      <option value="home"><a href="#">Back Home</a></option>
      <option value="Logout"><a href="#">Log Out</a></option>
</select>

</li>
</ul> 
</div> 
    </div>
    <fieldset style="border: 0cm;background-color: rgba(34, 32, 32, 0.283);">
    <form class="example" action="loginconnect.php" method="post">
      <input type="text" placeholder="Search our website..." name="search">
      <button type="submit" class="example-1" name="search">send<i class="fa fa-search-plus"></i></button>
    </form>
  </fieldset>
    <table style="padding: 0;margin: 0;" border:"0" cellspacing="6px">
      <tr>
        <td><img src="Iphone14.png" alt="Image" width="350px"height="500px"></td><td><img src="ping tree.png" alt="Image" height="500px" width="500px"></td><td><img src="giphy-2-1569946198.gif" alt="Image" height="500px" width="400px"></td>
      </tr>
      <tr>
          <ul>
          <td>
            
            <li class="Our-mission"><h1>Who We Are?</h1>
              <p>We are a Non-Government Organisation that aims at providing you
            with plentful Skills about Mobile and Computer devices</p>
            </li> 
      </td>
      <td>
        <li class="Our-mission"><h1>Our Mission</h1>
 <p>We are driven by the spirit of helping people to know how they 
 can fix their machines as well as mobile devices using Our free 
 written and video tutorials.</p>
        </li>
      </td>
      <td>
        <li class="Our-mission"><h1>About Our Services</h1>
<p>Our services are free to use and therefore we recommend our
 users not to pay at anyone who might use our name for their advantages.</p>
        </li>
      </td>
          </ul>
      
    </tr>
    </table>
    <div class="footer">
      <div class="col-1">
      <h3>USEFUL LINKS</h3> 
      <a href="#">About</a>  
      <a href="#">Services</a>  
      <a href="#">Contact</a>  
      <a href="#">Blog</a>  

      </div>
     <div class="col-2">
     <h3>NEWSLETTER</h3>
     <form action="newsletter.php" method="post" >
      <input type="email" name="email" placeholder="Your Email Address" required>
     </br>
      <button type="submit" name="send" >SUBSCRIBE NOW</button>
     </form>
    </div>
    <div class="col-3">
      <h3>CONTACT</h3>
      <p>KN 3 AVE</br>Kigali Nyarugenge</p>
      <div class="social-icon">
        <i class='bx bxl-facebook-circle'></i>
        <i class='bx bxl-youtube' ></i>
        <i class='bx bxl-whatsapp' ></i>
        <i class='bx bxl-instagram' ></i>
        <i class='bx bxl-linkedin-square' ></i>
      
    </div>
    </div>
    </div>
    
</body>
</html>