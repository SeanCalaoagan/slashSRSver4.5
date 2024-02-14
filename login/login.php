<?php
    session_start();
    include('../database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600&display=swap" rel="stylesheet">
   
</head>
<body>
    <div class="loginform">
        <p id="logtitle"> LOGIN </p>
        <p id="error">Invalid Credentials!</p>
        <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Username" id="field">
        <br>
        <input type="password" name="password" placeholder="Password" id="field">
        <br>
        <input type="submit" name="login" value="Login" id="submit">
        
        </form>
    </div>
    <div class="passwordsheet">
        <p style="color:red"> Password Sheet for Demonstration Purposes Only. </p>
        <br>
        <p> Sean || Username: Xian Shizukana || Password: 12345 </p>
        <p> Simon || Username: Letris || Password: 98765 </p>
        <p> Ramick || Username: Fate || Password: microwaveispowa </p>
    </div>
</body>
</html>

<?php



    function throwError() {
        echo"<script>alert('Invalid Credentials')</script>";
    };
    if(isset($_POST["login"])){

        $username = $_POST["username"];

        $sql = "SELECT * FROM userdb WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);

            if(password_verify($_POST["password"], $row["password"])){
            $_SESSION["username"] = $row["username"];
            $_SESSION["password"] = $row["password"];
            header("Location: ../home/home.php");
            } 
            
        } 
        throwError();
        // Invalid Login
        
           
    }
?>


