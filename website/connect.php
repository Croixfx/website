<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "tutorials";

$conn = new mysqli($servername, $username, $password, $database_name);
if ($conn->connect_error) {
    echo "connection error";
    die("Connection failed: " . $conn->connect_error);
}
else {
    //echo"Connection sucessfully!";
}
