<?php
include("connect.php");
include("usercheck.php");
// Check if the user is not logged in
if (!isset($_SESSION['login_user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
                body{
            background: rgb(24,26,32);
            margin: 0;
        }
        h1{

            color: rgba(255,255,255,0.8);
            background: rgb(71,77,87);
            margin-top: 0;
            padding: 0.7cm;
          
        }
        button{
       height: 1.5cm;
       width: 3cm;
       margin-right: 2cm;
       background:rgb(24,26,32); ;
       color: rgb(252,213,53);

    
        }
        #container{
            display: inline-flex;
        }
        #logout{
            margin-left: 4cm;
        }
        input{
            height: 1.5cm;
            width: 3cm;
            margin-left: 2.8cm;
            margin-right: 0.5cm;
            background: rgb(252,213,53);
        }
        
        
        

        .dropbtn {
            background-color: #3498DB;
            color: white;
            padding-right: 30px;
            padding-left: 30px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
        .dropbtn:hover, .dropbtn:focus {
            background-color: #2980B9;
        }
        .dropdown {
            position: relative;
            display: inline-block;
            margin-right:  1.6cm;
            margin-left:  1.75cm;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background: #ddd;
        }
        .show {
            display: block;
        }
        h2{
            color: white;
            text-align: center;
            margin-top: 1cm;
        }
        a{
            color: green;
            text-decoration: none;
        }
        a:hover{
            color: red;
        }
        .col-2{
            text-align: center;
           margin-top: 1cm;
           }
    .col-2-input{
        color: whitesmoke;
        background: black;
        width: 10cm;
        height: 35px;
        border-radius: none;
        border: 0px;
       
    }
    .col-2-button{
        color: whitesmoke;
        background: rebeccapurple;
        width: 4cm;
        height: 35px;
        border-radius: none;
        border: 0px;
        margin-top: 5px;
        margin-left: 3cm;
        outline-style: auto;
    }
    .col-2-button:hover{
        color: red;
    }
    p{
        color: white;
        text-align: center;
        background: rgba(255,255,255,0.2);
        margin-bottom: 0px;
        margin-top: 50px;

    }
    </style>
</head>
<body>
    <div class="container">
        <h1>
            <a href="Home1.php"><button name="home">HOME</button></a>
            Welcome Our User
            <a href="logout.php"><input type="submit" name="logout" value="LOG OUT"/></a>
            <a href="#"><input type="submit" name="profile" value="USER"/></a>
            <a href="#"><input type="submit" name="profile" value="LANGUAGES"/></a>
        </h1>
    </div>

    <div class="dropdown">
        <button onmouseenter="myFunction('menuDropdown')" class="dropbtn">MENU</button>
        <div id="menuDropdown" class="dropdown-content">
            <a href="#">Phone</a>
            <a href="#">Computer</a>
            <a href="#">Web3</a>
            <a href="#">Settings</a>

        </div>
    </div>

    <div class="dropdown">
        <button onmouseenter="myFunction('learnDropdown')" class="dropbtn">Tutorials</button>
        <div id="learnDropdown" class="dropdown-content">
            <a href="#">Written</a>
            <a href="#">Videos</a>
            <a href="#">Web3</a>
        </div>
    </div>

    <div class="dropdown">
        <button onmouseenter="myFunction('videosDropdown')" class="dropbtn">Sort by</button>
        <div id="videosDropdown" class="dropdown-content">
            <a href="#">Computer</a>
            <a href="#">Mobile</a>
            <a href="#">Web3</a>
        </div>
    </div>

    <div class="dropdown">
        <button onmouseenter="myFunction('followDropdown')" class="dropbtn">FOLLOW</button>
        <div id="followDropdown" class="dropdown-content">
            <a href="#">Youtube</a>
            <a href="#">Instagram</a>
            <a href="#">WhatsApp</a>
        </div>
    </div>
 <div class="apply">
      <h2>
        If you want to become a content creator, you can apply directly by 
        clicking <a href="#"> here</a>
      </h2>
 </div>
 <div class="col-2">
     <h2>NEWSLETTER</h2>
     <form action="newsletter.php" method="post" >
      <input class="col-2-input"type="email" name="email" placeholder="Your Email Address" required>
     </br>
      <button class="col-2-button" type="submit" name="send" >SUBSCRIBE NOW</button>
     </form>
    </div>
    <div>
        <p>copyright reserved || Tutorials by croix</p>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
    var dropdowns = document.querySelectorAll('.dropdown');

    dropdowns.forEach(function(dropdown) {
        dropdown.addEventListener('mouseenter', function() {
            this.querySelector('.dropdown-content').classList.add('show');
        });

        dropdown.addEventListener('mouseleave', function() {
            this.querySelector('.dropdown-content').classList.remove('show');
        });
    });

    window.addEventListener('click', function(event) {
        if (!event.target.matches('.dropbtn')) {
            dropdowns.forEach(function(dropdown) {
                var dropdownContent = dropdown.querySelector('.dropdown-content');
                if (dropdownContent.classList.contains('show')) {
                    dropdownContent.classList.remove('show');
                }
            });
        }
    });
});

    </script>
</body>
</html>
