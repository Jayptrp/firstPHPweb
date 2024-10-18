<?php
    session_start();

    if (!isset($_SESSION["email"])) {
        header("Location: login.php");
    }
    if (isset($_GET["logout"])) {
        session_destroy();
        header("Location: /COMIT-project-test/login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <p> Hello <?php echo $_SESSION["email"] ?> !</p>
    <a href="index.php/?logout=1"><button>logout</button></a>
</body>
</html>