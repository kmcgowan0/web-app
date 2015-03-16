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

<div class="register">
            <form action="index.php" method="post">
                <p>Username:</p><input type="text" name="username" value=""/><br>
                <p>Password:</p><input type="text" name="password" value=""/><br>
                <p>City:</p><input type="text" name="city" value=""/><br><br>
                <input type="submit" name="submit" value="Register"/>
            </form>
        </div>