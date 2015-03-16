<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>
<?php    

    if(isset($_POST["submit"])) {
        $forename = ($_POST["user_forename"]);
        $surname = ($_POST["user_surname"]);
        $dob = ($_POST["user_dob"]);
        $city = ($_POST["user_city"]);
        $username = ($_POST["user_name"]);
        $password = ($_POST["user_password"]);
        

        $query = "INSERT INTO users (user_forename, user_surname, user_dob, user_city, user_name, user_password) VALUES ('{$forename}','{$surname}','{$dob}','{$city}','{$username}','{$password}',)";

        $result = mysqli_query($connection, $query);
        
        if($result) {
            $message = "Post added";
        } else {
            $message = "Something went wrong";
        }
    } 
?>
<div class="holiday-toggle">
    <p>Add A Holiday</p>
</div>
<div class="add-holiday">
            <form action="holidays.php" method="post">
                <p>Username:</p><input type="text" name="holiday_user" value=""/><br>
                <p>Location:</p><input type="text" name="holiday_location" value=""/><br>
                <p>Description:</p><input type="text" name="holiday_description" value=""/><br>
                <p>Rating:</p><input type="text" name="holiday_rating" value=""/><br>
                <p>Tags:</p><input type="text" name="holiday_tags" value=""/><br>
                <p>Picture:</p><input type="text" name="holiday_picture" value=""/><br>
                <br>
                <input type="submit" name="submit" value="Holiday"/>
            </form>
        </div>

        
<?php include_once("../includes/templates/footer.php"); ?>        