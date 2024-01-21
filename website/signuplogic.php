<?php
include("connect.php");

if (isset($_POST['send'])) {
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $bd = $_POST['birthdate'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeatpassword'];

    // Check if passwords match
    if ($password !== $repeatPassword) {
        echo "Passwords do not match";
    } elseif (strlen($password) < 4) {
        echo "Password must be at least 4 characters long";
    } else {
        // Check if email or phone already exists
        $checkQuery = "SELECT * FROM registration WHERE Email='$email' OR Phone='$phone'";
        $checkResult = mysqli_query($conn, $checkQuery);

        if (mysqli_num_rows($checkResult) > 0) {
            echo "Email or Phone already exists!! Please choose different ones.";
            
        } else {
            // Proceed with registration logic
            $insertQuery = "INSERT INTO registration (FirstName, MiddleName, LastName, Phone, Birthdate, Email, Password)
                            VALUES ('$fname', '$mname', '$lname', '$phone', '$bd', '$email', '$password')";
            $store = mysqli_query($conn, $insertQuery);

            if (!$store) {
                echo "Registration error: " . mysqli_error($conn);
            } else {
                echo "Registered successfully. Redirecting to login page...";
                // Redirect to login page after a brief delay
                echo '<script>
        setTimeout(function() {
            window.location.href = "login.php";
        }, 2000); // Redirect after 2 seconds
      </script>';
exit();
            }
        }
    }
}
?>
