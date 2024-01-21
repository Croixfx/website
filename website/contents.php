
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
    <title>Admin dashboard</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body, html {
            background-color: rgba(128, 128, 128, 0.334);
            padding: 0;
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            display: flex; /* Use flexbox to arrange items in a column */
            flex-direction: column; /* Arrange items vertically */
        }

   h1{

    margin: 0;
    padding: 10px;
    text-align: center;
    background: rgba(255,255,255,0.2);
   }

        .content-wrapper {
            display: flex;
            position: fixed;
            margin-top: 100px;
        }

        .col1 {
            height: auto;
            width: 200px;
            padding: 20px;
            background: linear-gradient(to right, #4CAF50, #2196F3);
            display: inline-flex;
            flex-direction: column; /* Arrange items vertically */
            align-items: center;
            margin-right: 20px;
        }

        .home {
            margin: 5px 0;
            padding: 10px;
            width: 150px;
            background-color: dodgerblue;
            color: white;
            text-align: center;
            border-radius: 10px;
            font-style: bold;
            font-size: 16px;
            cursor: pointer;
        }
        a{
            text-decoration: none;
        }

        .home:hover {
            background-color: #ffdb4d;
        }

        .col2 {
            padding: 20px;
            height: auto;
            display: block;
        }
        p{
            text-align: center;
            background: rgba(255,255,255,0.2);
        }
        table {
        
        border-spacing: 5px;
    }

    th, td {
        padding: 8px ; 
        padding-right: 50px;
        padding-left: 50px;/* Adjust this value to your preference */
        border: 4px solid rgba(255,255,255,0.2); /* You can adjust or remove the border as needed */
    }

    th {
        border: none;
    }
.col2{
    margin-top: 30px;
}
.support{
    margin-top: 20px;
    text-align: center;
}
a:hover{
    color: blue;
}
a:active{
    color: red;
}
table{
    width:80%;
    margin:auto;
}
table tr{
    padding:8px;
}

    </style>
</head>
<body>
    <h1>Welcome to the Admin Panel</h1>

    <div class="content-wrapper">
        <div class="col1">
            <a href="contents.php"><div class="home"><i class="fas fa-plus"></i>Manage contents</div></a>
            <a href="manageusers.php"><div class="home">Manage Users</div></a>
            <a href="#"><div class="home"><i class="fas fa-people-robbery" style="color: #241f31;"></i>View Feedbacks</div></a>
            <a href="index.php" onclick="redirectToIndex()"><div class="home"><i class="fas fa-user" style="color: #000000;"></i>Manage Creators</div></a>
            <a href="#"><div class="home">Share our website</div></a>
                <a href="#"><div class="home">Statistics</div></a>
                <a href="#"><div class="home">Settings</div></a>
            <div class="down">
                <a href="logout.php" onclick="logout()"><div class="home">Logout</div></a>




            </div>
        </div>

        <div class="col2">
        <h1>Welcome to Contents </h1>
    </div>
    

    <script>
     function redirectToIndex() {
    console.log("Redirecting to index.php");
    window.location.href = 'index.php';
}

        function logout() {
            var r = confirm("Do you want to logout?");
            if (r == true) {
                // Replace with the appropriate logout functionality
                 window.location.href = "login.php";
            }
        }
    </script>


</body>
</html>
