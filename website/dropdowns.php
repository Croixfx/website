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
    <title>Dropdowns</title>
</head>
<body>
    <style>
        
        </style>
    
 <script>
           
        </script>
</body>
</html>