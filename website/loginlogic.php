<?php
error_reporting(E_ALL);
ini_set("Display_errors",1);
include("connect.php");
session_start();
if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        // Check if the logged-in user is the admin
        if ($email == 'admin@gmail.com' && $password == 'Admin123') {
            $_SESSION['login_user']=$email;
            header("Location: Adminpanel.php");
        } else {
            $_SESSION['login_user']=$email;
            header("Location: welcome.php");
        }
    } else {
        echo '<script>
            window.location.href="Login.php";
            alert("Login failed! Invalid email or Password");
        </script>';
    }
}
