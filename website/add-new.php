
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
    background: yellow;
   }

        .content-wrapper {
            display: flex;
           
        }
        .content-wrapper a{
            text-decoration: none;
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
            width: 200px;
            background-color: dodgerblue;
            color: white;
            text-align: center;
            border-radius: 10px;
            font-style: bold;
            font-size: 16px;
            cursor: pointer;
        }


        .home:hover {
            background-color: #ffdb4d;
        }

        .col2 {
            margin-left:50px;
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

<?php
include "connect.php";

if (isset($_POST["submit"])) {
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];

   $sql = "INSERT INTO `Content_creator`(`id`, `first_name`, `last_name`, `email`, `gender`) VALUES (NULL,'$first_name','$last_name','$email','$gender')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>PHP CRUD Application</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      PHP Complete CRUD Application
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New User</h3>
         <p class="text-muted">Complete the form below to add a new user</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">First Name:</label>
                  <input type="text" class="form-control" name="first_name" placeholder="Albert">
               </div>

               <div class="col">
                  <label class="form-label">Last Name:</label>
                  <input type="text" class="form-control" name="last_name" placeholder="Einstein">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Email:</label>
               <input type="email" class="form-control" name="email" placeholder="name@example.com">
            </div>

            <div class="form-group mb-3">
               <label>Gender:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="male" value="male">
               <label for="male" class="form-input-label">Male</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="female" value="female">
               <label for="female" class="form-input-label">Female</label>
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
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
