<?php
    include('../database.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="registerstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&display=swap" rel="stylesheet">
    
</head>
<body>

    <div class="regbox">
        <b id="register"> REGISTER </b>
     
            <form action="register.php" method="post">
                <input type="text" name="username" placeholder="Username" class="field" id="uid"> 
                <br>
                <input type="password" name="password" placeholder="Password" class="field" id="pass"> 
                <br>
                <input type="text" name="yrlevel" placeholder="Year Level" class="field" id ="yrlevel">
                <br>
                <input type="text" name="color" placeholder="Favorite Color" class="field" id ="color">
                <br>
                <input type="text" name="food" placeholder="Favorite Food" class="field" id ="food">
                <br>
                <input type="submit" value="Sign Up" id="button" name="register">
            </form>
            
    </div>  
   
</body>
</html>

<?php
    if(isset($_POST["register"])){
        // User and Password
        $username = $_POST["username"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

        // SQL Query
        $sql = "SELECT * FROM userdb WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        // Is every field filled?
        if(!empty($_POST["username"]) && !empty($_POST["password"]) &&
           !empty($_POST["yrlevel"]) && !empty($_POST["color"]) && !empty($_POST["food"])){

            // Checks if username is taken
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
    
                if($row["username"] == $username){

                    
                    echo"<script>alert('Username taken')</script>";
                }
                
            } else {

            // Inserts field data into SQl table
            $username = $_POST["username"];
            $yrlevel = $_POST["yrlevel"];
            $favcolor = $_POST["color"];
            $favfood = $_POST["food"];
            
            $sql = "INSERT INTO user_tb (username, password, yrlevel, favcolor, favfood)
                      VALUES ('$username', '$password', '$yrlevel', '$favcolor', '$favfood')";

            $conn = mysqli_query($conn, $sql);

            header("Location: ../login/login.php");
            }
        }
    }

?>
