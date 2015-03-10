<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>



<?php    

    if(isset($_POST["submit"])) {
        $username = ($_POST["username"]);
        $password = ($_POST["password"]);
        $city = ($_POST["city"]);

        $query = "INSERT INTO users (username, password, city) VALUES ('{$username}','{$password}','{$city}')";

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
            <p>Don't have an account? <a href=register.php>Register</a> </p>
        </div>

 


<?php
    if(isset($_POST["submit"])) {
        echo $username ; 
        echo $password ; 
        echo $city ;
    }
?>

        
<?php include_once("../includes/templates/footer.php"); ?>   
