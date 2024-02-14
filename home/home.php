<?php
    session_start();
    include("../database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=VT323&display=swap" rel="stylesheet">
</head>
<body>
    
    <script src="home.js"></script>
    <div class="headerbox">
            <h1>Portfolio of <br>Group slashSRS</h1>
    </div>

    <div class="links">
        <form action="home.php" method="post">
        <input type="submit" name="resume" value="Resume" id="resumebutton">
        </form>
    </div>
    
    <div class="links">
        <a href="../members/members.php">Members</a>
    </div>
    <div class="links">
        <a href="../goals/goals.php">Goals</a>
    </div>
    <div class="links">
        <form action="home.php" method="post">
        <input type="submit" name="logout" value="Logout" id="logoutbutton">
        </form>
    </div>
    

</body>
</html>

<?php
    if(isset($_POST["resume"])){
        if($_SESSION["username"] == "Xian Shizukana"){
            header("Location: ../seanportfolio/seanportfolio.html");
        } 
        if($_SESSION["username"] == "Fate"){
            header("Location: ../ramickportfolio/ramickportfolio.html");
        } 
        if($_SESSION["username"] == "Letris"){
            header("Location: ../simonportfolio/simonportfolio.html");
        }

    }

    if(isset($_POST["logout"])){
        session_destroy();
        mysqli_close($conn);
        header("Location: ../index.php");
    }
?>