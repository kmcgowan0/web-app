<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>
<?php    
    if(isset($_POST["submit"])) {
        $location = ucfirst($_POST["holiday_location"]);
        $description = ucfirst($_POST["holiday_description"]);
        $rating = ($_POST["holiday_rating"]);
        $tags = ($_POST["holiday_tags"]);
        $holuser = ucfirst($_POST["holiday_user"]);
        
        $query = "INSERT INTO holiday (holiday_location, holiday_description, holiday_rating, holiday_tags, holiday_user) VALUES ('{$location}','{$description}','{$rating}','{$tags}','{$holuser}')";
        $result = mysqli_query($connection, $query);
        
        if($result) {
            $message = "Post added";
        } else {
            $message = "Something went wrong";
        }
    } 
ini_set('session.bug_compat_warn', 0);
ini_set('session.bug_compat_42', 0);
?>


        
<div class="container">            
            
            <?php $title = "Box"; ?>
            
            
            
            <?php if(isset($message)) { ?>
                
                <div class="box">
                    <p><?php echo $message; ?></p>
                </div>
            
            <?php } ?>

<div class="holiday-toggle">
    <p>Add A Holiday</p>
</div>
<div class="add-holiday">
            <form action="holidays.php" method="post">
                <p>Location:</p><input type="text" name="holiday_location" value=""/><br>
                <p>Description:</p><input type="text" name="holiday_description" value=""/><br>
                <p>Rating:</p> <select name="holiday_rating">
                <option value="">--Select--</option>
                <option value="">0</option>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                </select>
                <p>Tags:</p><input type="text" name="holiday_tags" value=""/><br>
                <p>Username:</p><input type="text" name="holiday_user" value=""/><br>
                <br>
                <input type="submit" name="submit" value="Add"/>
            </form>
        </div>



<?php
    if(isset($_POST["submit"])) {
        echo "Location: $location " ;
        echo "Description: $description " ;
        echo "Rating: $rating /5 " ;
        echo "Tags: $tags " ;
        
        echo "Username: $holuser " ; 
        
    }
?>
        <?php if(isset($message)) { ?>
                
                <div class="box">
                    <p><?php echo $message; ?></p>
                </div>
            
            <?php } ?>
    
    <?php 
            include "box.php"    
                

            ?>

        
<?php include_once("../includes/templates/footer.php"); ?>  