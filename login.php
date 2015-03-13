<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php

    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $query = "SELECT * FROM users WHERE username='{$username}' AND password='{$password}' LIMIT 1";
        $result = mysqli_query($connection, $query); 
        
        if($user = mysqli_fetch_assoc($result)) {
            $_SESSION["message"] = "Success, welcome back {$user["username"]}";
            $_SESSION["username"] = $user["username"];
            $_SESSION["user_id"] = $user["id"];
          } else {
            $_SESSION["message"] = "Wrong username/password";
         
        }
       
    }

   

    redirectTo("index.php");


?>