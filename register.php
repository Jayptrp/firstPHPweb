<?php
    session_start();
    include("server.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="login.css">
    <style>
        body {
            animation: bgColor 1s ease 0.3s 1 forwards;
            animation-fill-mode: both;
        }
        @keyframes bgColor {
            from {background-color: rgb(0, 136, 255);}
            to {background-color: rgb(255, 37, 37);}
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Registration</h2>
    <form action="register.php" method="POST">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="password2">Comfirm password:</label>
            <input type="password" id="password2" name="password2" required>
        </div>
        <button type="submit" name="login_submit" class="submit-btn">Submit</button>
    </form>
    <p>Have a member? <a href="login.php">Log in</a></p>
</div>

</body>
</html>
