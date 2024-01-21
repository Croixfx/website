<?php
//connection
$servername="localhost";
$username="root";
$password= "";
$database_name= "tutorials";
$connection= mysqli_connect($servername,$username,$password,$database_name);
if (!$connection) {
    die("connection failed".mysqli_error($connection));
}
else
{
    echo "";
}

if (isset($_POST['Send'])) {
    // Validate and sanitize input
    $full_name = mysqli_real_escape_string($connection, $_POST['full_name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $messages = mysqli_real_escape_string($connection, $_POST['messages']);

    // Basic validation - ensure required fields are filled
    if (empty($full_name) || empty($email) || empty($messages)) {
        echo "All fields are required.";
    } else {
        // Prepare and execute the SQL statement with a prepared statement
        $sql_query = "INSERT INTO table_entries (full_name, email, messages) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($connection, $sql_query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sss", $full_name, $email, $messages);
            mysqli_stmt_execute($stmt);

            echo "New details have been recorded successfully!";
            mysqli_stmt_close($stmt);
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    }
    mysqli_close($connection);
}
?>