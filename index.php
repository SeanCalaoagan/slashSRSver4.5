<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600&display=swap" rel="stylesheet">
    <title>Welcome</title>
</head>
<body>

    <div class="box">
    <h1>Welcome, User!</h1>
    
    <form action="index.php" method="post">
    <input type="submit" value="Login" name="login" class="button">
    <input type="submit" value="Register" name="register" class="button">
    </form>
    </div>

</body>
</html>

<?php
    if(isset($_POST["login"])){
        header("Location: login/login.php");
    }
    if(isset($_POST["register"])){
        header("Location: register/register.php");
    }
?>