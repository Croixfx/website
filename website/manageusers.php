<?php
include("connect.php");
include("usercheck.php");
// Check if the user is not logged in
if (!isset($_SESSION['login_user'])) {
    header("Location: login.php");
    exit();
}
?>
<?php
include 'connection.php';

$query = "SELECT * FROM registration";
$stmt = mysqli_prepare($conn, $query);

if ($stmt) {
    echo "<h2>Manage All Users</h2>";

    echo "<table class=\"admin-table\">";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Full Name</th>";
    echo "<th>Email</th>";
    echo "<th>Action</th>";
    echo "</tr>";

    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_row($result)) {
        echo "<tr>";
        echo "<td>", $row[0], "</td>";
        echo "<td>", $row[1] . " " . $row[3], "</td>";
        echo "<td>", $row[6], "</td>";
        echo "<td>";
        echo "<a href=\"edituser.php?userid=$row[0]\">EDIT</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<a href=\"approveuser.php?userid=$row[0]\">APPROVE</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<a href=\"deleteuser.php?userid=$row[0]\">DELETE</a>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>
<?php 
require_once "connection.php";

if (isset($_POST['send'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $q = "SELECT * FROM registration WHERE email=?";
    $s = mysqli_prepare($conn, $q);
    mysqli_stmt_bind_param($s, 's', $email);
    mysqli_stmt_execute($s);
    $re = mysqli_stmt_get_result($s);
    $row = mysqli_fetch_assoc($re);

    if (!$row) {
        $firstname = mysqli_real_escape_string($conn, $_POST['first_name']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $birthdate = mysqli_real_escape_string($conn, $_POST['birthdate']);
        $lastname = mysqli_real_escape_string($conn, $_POST['last_name']);
        $middlename = mysqli_real_escape_string($conn, $_POST['middle_name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password1 = mysqli_real_escape_string($conn, $_POST['password1']);
        $password2 = mysqli_real_escape_string($conn, $_POST['password2']);

        if ($password1 != $password2) {
            $error1 = "Password not match.";
            die("Password must match");
        }

        if (empty($firstname) || empty($password2) || empty($password1) || empty($phone) || empty($email) || empty($birthdate)) {
            $error1 = "All fields are required";
        } else {
            $hashed_password = password_hash($password1, PASSWORD_DEFAULT);
            $query = "INSERT INTO registration (firstname, middlename, lastname, phone, birthdate, email, password) 
                      VALUES (?, ?, ?, ?, ?, ?, ?)";

            $stmt = mysqli_prepare($conn, $query);

            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "sssssss", $firstname, $middlename, $lastname, $phone, $birthdate, $email, $hashed_password);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                if ($result) {
                    header("location: profile.php");
                    mysqli_stmt_close($stmt);
                    exit();
                } else {
                    $error = "Something went wrong";
                }
            } else {
                $error = "Something went wrong";
            }
        }
    } else {
        $error = "User already has an account. Please login.";
    }
}

mysqli_close($conn);
?>
