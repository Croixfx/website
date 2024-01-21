<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css" />  
    <title>Registration</title>
</head>
<body>
    <style>
        body {
    background: #eaecef;
    text-align: center;
    margin: 0;
    color: #eaecef;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

h1 {
    margin-top: 0;
    padding: 10px 10px;
}
.container {
    background: #2c3e50; /* Change this to a different color */
    text-align: center;
    color: #eaecef;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 70vh;
    border-radius: 8px; /* Add border-radius for rounded corners */
    padding: 20px; /* Add padding for space inside the box */
    
}


.form_group {
    font-size: x-large;
}

input {
    height: 0.9cm;
    width: 8cm;
    background: rgba(41,132,251,0.2);
    color: #eaecef;
    font-size: large;
    padding: 8px;
    box-sizing: border-box;
}

button {
    height: 1cm;
    width: 3.5cm;
    font-size: x-large;
    background: #fcd535;
    color: #181a20;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
    </style>

    <div class="container">
        <form action="signuplogic.php" method="post">
            <h1>Sign up</h1>
            <div class="form_group">First name: <input type="text" name="firstname" class="form_control" style="margin-left:30px" required></div>
            <div class="form_group">Middle name: <input type="text" name="middlename" style="margin-left:5px"></div>
            <div class="form_group">Last name: <input type="text" name="lastname" required="required" style="margin-left:32px"></div>
            <div class="form_group">Phone number: <input type="tel" name="phone" class="form_control" required="required" style="margin-right:8px"></div>
            <div class="form_group">Birth date: <input type="date" name="birthdate"  required class="form_control" style="margin-left:40px"></div>
            <div class="form_group">Email: <input type="email" name="email"  class="form_control"style="margin-left:75px" required></div>
            <div>
                <p style="font-size:x-large">Create strong password: <input type="password" name="password" class="form_control"  required></p>
            </div>
            <div class="form_group">
                <div class="form_group">
                    Confirm Password: <input type="password" class="form_control" name="repeatpassword"  style="margin-left:50px">
                </div>
                <div class="form_group">
                    <button type="submit" class="form_control" name="send" title="click me to log in" style="margin-left: 11.5cm; width: 3.5cm;height: 1cm;font-size: x-large;background: #fcd535;margin-top:10px">Register</button> 
                </div>
            </div>
        </form>
    </div>

</body>
</html>
