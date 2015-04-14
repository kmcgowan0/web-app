<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>
<?php    
    if(isset($_POST["submit"])) {
        $location = ucfirst($_POST["holiday_location"]);
        $description = ucfirst($_POST["holiday_description"]);
        $rating = ($_POST["holiday_rating"]);
        $holuser = ucfirst($_POST["holiday_user"]);
        
        $query = "INSERT INTO holiday (holiday_location, holiday_description, holiday_rating, holiday_user) VALUES ('{$location}','{$description}','{$rating}','{$holuser}')";
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
            
            

<div class="holiday-toggle">
    <p>Add A Holiday</p>
</div>
<div class="add-holiday">
    <form action="holidays.php" method="post">
        <p>Location:</p><input type="text" name="holiday_location" value=""/><br>
        <p>Description:</p><textarea rows="6" cols="20" type="text" name="holiday_description" value=""></textarea><br>
        <p>Rating /5:</p> <input type="number" name="holiday_rating" min="0" max="5" value=""/>
      
        <p>Name:</p><input type="text" name="holiday_user" value=""/><br>
        <br>
        <input type="submit" name="submit" value="Add"/>
    </form>
</div>




        <div class="sort">
            <p>Sort Holidays</p>
            <form action="holidays.php" method="post">
                <select name="sort-by">
                    <option value="new">Newest First</option>
                    <option value="best">By Rating</option>
                </select>
                <input type="submit" name="sort" value="Sort" />
            </form>
        </div>
    



<!--?php
    if(isset($_POST["submit"])) {
        echo "Location: $location " ;
        echo "Description: $description " ;
        echo "Rating: $rating /5 " ;
        echo "Tags: $tags " ;
        
        echo "Username: $holuser " ; 
        
    }
?>-->
<?php if(isset($message)) { ?>

    <div class="success">
        <p><?php echo $message; ?></p>
    </div>

<?php } ?>
    
    <?php 
            include "box.php"    
                
            ?>

        
<?php include_once("../includes/templates/footer.php"); ?> 
