<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="contactus.css">
</head>
<style>
body{
    text-align: center;
  }
  button{
    width: 150px;
    height: 45px;
  }
  </style>
<body>
  <table border="0" cellspacing="0" cellpadding="o" width="100%">
    
    <tr height="80px" style="background-color: azure;"><td colspan="2">
        <h1 align="center">Contact Us</h1>
    </td><td>          <button name="Go back home" style="margin-right: 100px;"><a href="Home1.html" style="text-decoration-line: none;">back Home</a></button></td></tr>
    <tr height="200px"><td>
      <div class="icon"><i class='bx bx-map'></i></div>
      <div class="text">
          <h3>Address</h3>
          <p> KN3 AVE Road,<br/> NYARUGENGE, KIYOVU<br/> CST</p>
      </div>
      </div>  
    </td>
    <td>
      <div class="icon"><i class='bx bx-envelope' ></i></div>
      <div class="text">
          <h3>Email</h3>
          <p>jeanniyonkuru29@gmail.com<br/>musa@gmail.com</p>
      </div>
      </div>
    </td>
    <td>
      <div class="icon"><i class='bx bxs-phone-call' ></i></div>
    <div class="text">
        <h3>Phone number</h3>
        <p>+250782693724<br/>+250787065734<br/>+250791791130</p>
    </div>
    </div>
    </td>
</tr>

    <tr><td><img src="location-red.gif" alt="Location gif" height="200px" ></td><td><img src="MAIL-12-600.gif" alt="Mail image" height="200px" ></td><td><img src="image1bg.png" alt="contactus image" height="200px"></td></tr>
    <tr height="200px"><td colspan="3">
      <h2 align="center">Feedback</h2>
      <p style="font-size: x-large;text-align: center;">If you have something to tell us weather it's about our services<br/> 
        or things we can improve to make this site more user friendly and flexible,<br/>
         please feel free to contact us using one of methods we offer to let us know <br/>
         what to improve or what we can change.<br/> 
         This website was designed for you and leaving us a feedback <br/>
         would be a big support for us to know what services we can improve! <br/>
         Your feedback will be highly appreciated!</p></td></tr>
    <tr height="200px"><td colspan="2"> 
      <div class="contactForm" ></div>
      <form action="croixconnection.php" method="post">
          <h2>Send Your Message</h2>
          <span>Full Name: </span><input type="text" name="full_name" required="required" style="padding: 5px;"><br/>
          <span style="margin-left: 29px;">Email: </span><input type="email" name="email" required="required" style="margin-top: 10px;padding: 5px;"><br/>
          <span>Type your message inside the box...</span>
          <textarea required="required" name="messages" style="margin-right: 150px;margin-top: 10px; padding: 10px;"></textarea><br/>
          <button name="Send" style="margin-left: 220px;" style="display: block;width: 15px;">Send</button>      
        </td>
          <td>

           <button name="Previous page"><a href="#" style="text-decoration-line: none;"> Go to the Previous page</a></button>
          </td></tr>
    
  </table> 
  <?php
    require 'croixconnection.php';
    ?>
</body>
</html>