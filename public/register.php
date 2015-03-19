<?php require_once("session.php"); ?>
<?php require_once("connect.php"); ?>
<?php require_once("functions.php"); ?>
<?php include_once("header.php"); ?>


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
                <p>Forename:</p><input type="text" name="user_forename" value=""/><br>
                <p>Surname:</p><input type="text" name="user_surname" value=""/><br>
                <p>Date Of Birth:</p><input type="text" name="user_dob" value=""/><br>
                <p>City:</p><input type="text" name="user_city" value=""/><br>
                <p>Username:</p><input type="text" name="user_name" value=""/><br>
                <p>Password:</p><input type="text" name="user_password" value=""/><br>
                <br>
                <input type="submit" name="submit" value="Register"/>
            </form>
        </div>
