<?php require_once("session.php"); ?>
<?php require_once("connect.php"); ?>
<?php require_once("functions.php"); ?>
<?php include_once("header.php"); ?>



<?php    

    if(isset($_POST["submit"])) {
        $forename = ucfirst($_POST["user_forename"]);
        $surname = ucfirst($_POST["user_surname"]);
        $dob = ($_POST["user_dob"]);
        $city = ucfirst($_POST["user_city"]);
        $username = ucfirst($_POST["user_name"]);
        $password = ($_POST["user_password"]);
        
        
        
            $query = "INSERT INTO users (user_forename, user_surname, user_dob, user_city, user_name, user_password) VALUES ('{$forename}', '{$surname}', '{$dob}',  '{$city}', '{$username}', '{$password}')";

        $result = mysqli_query($connection, $query);
        
        if($result) {
            $message = "Post added";
        } else {
            $message = "Something went wrong";
        }
            
        }
    
    
?>
   

<div class="login-toggle">
    <p>Login</p>
</div>
        <div class="login-box">
            <form action="login.php" method="post">
                <p>Username:</p> <input type="text" name="username" value="" /> <br>
                <p>Password:</p> <input type="password" name="password" value="" /> <br>
                <br>
                <input type="submit" name="login" value="Login" />
            </form>
            
        </div>

 <div class="register-toggle">
     <p>Don't have an account? <br> Register</p>
</div>
     <div class="register">
            <form action="index.php" method="post">
                <p>Forename:</p><input type="text" name="user_forename" value=""/><br>
                <p>Surname:</p><input type="text" name="user_surname" value=""/><br>
                <p>Date Of Birth:</p><input type="date" name="user_dob" value=""/><br>
                <p>City:</p><input type="text" name="user_city" value=""/><br>
                <p>Username:</p><input type="text" name="user_name" value=""/><br>
                <p>Password:</p><input type="text" name="user_password" value=""/><br>
                <br>
                <input type="submit" name="submit" value="Register"/>
            </form>
        </div>




<?php
    if(isset($_POST["submit"])) {
        echo $message;
        echo "Forename: $forename " ;
        echo "Surname: $surname " ;
        echo "Date of birth: $dob " ;
        echo "City: $city " ;
        echo "Username: $username " ; 
        echo "Password: $password " ; 
        
    }
?>


        
<?php include_once("footer.php"); ?>        