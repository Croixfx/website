<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include("connect.php");

if (isset($_POST['send']))
{
    $email = $_POST['email'];
      $checkQuery= "SELECT * FROM newsletter WHERE email='$email'";
      $checkResult = mysqli_query($conn, $checkQuery);
      if (mysqli_num_rows($checkResult) > 0) {
        echo "You are already our subscriber!!";
        echo "<script>
        setTimeout(function() {
            window.location.href = 'Home1.php';
        }, 2000);
      </script>";
    }
        else 
 {
      $insertQuery = "INSERT INTO newsletter (email) VALUES (?)";
      $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("s", $email);

    if ($stmt->execute()) {
        echo "You have subscribed successfully!!";
        echo"<script>
        setTimeout(function(){
        window.location.href='welcome.php';
        },2000);
        </script>";
    } else {
        echo "Error subscribing: " . $stmt->error;
    }

    $stmt->close();
 }
}

?>
