<?php
session_start();
include("server.php");

if (isset($_POST["login_submit"])) {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Query to fetch user details by email
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $query = mysqli_query($conn, $sql);
    
    // Check if a user with this email exists
    if (mysqli_num_rows($query) == 1) {
        $result = mysqli_fetch_assoc($query);
        $stored_password = $result['password'];

        // Verify the input password with the stored hash
        if ($password == $stored_password) {
            $_SESSION["email"] = $email;
            $_SESSION["level"] = $result["level"];
            $_SESSION["text"] = "You are now logged in!";
            header("Location: index.php");
            exit();
        } else {
            echo '<script>alert("Wrong password!");</script>';
        }
    } else {
        echo '<script>alert("No user found with this email!");</script>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    <style>
        body {
            animation: bgColor 1s ease 0.3s 1 forwards;
            animation-fill-mode: both;
        }
        @keyframes bgColor {
            from {background-color: rgb(255, 37, 37);}
            to {background-color: rgb(0, 136, 255);}
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" name="login_submit" class="submit-btn">Submit</button>
    </form>
    <p>Not a member? <a href="register.php">Sign in</a></p>
</div>

</body>
</html>
