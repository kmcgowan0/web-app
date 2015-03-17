<?php require_once("session.php"); ?>
<?php require_once("connect.php"); ?>
<?php require_once("functions.php"); ?>
<?php include_once("header.php"); ?>
<?php    

    if(isset($_POST["submit"])) {
        $location = ucfirst($_POST["holiday_location"]);
        $description = ucfirst($_POST["holiday_description"]);
        $rating = ($_POST["holiday_rating"]);
        $tags = ($_POST["holiday_tags"]);
        $picture = ($_POST["holiday_picture"]);
        $holuser = ucfirst($_POST["holiday_user"]);
        

        $query = "INSERT INTO holiday (holiday_location, holiday_description, holiday_rating, holiday_tags, holiday_picture, holiday_user) VALUES ('{$location}','{$description}','{$rating}','{$tags}','{$picture}','{$holuser}')";

        $result = mysqli_query($connection, $query);
        
        if($result) {
            $message = "Post added";
        } else {
            $message = "Something went wrong";
        }
    } 
?>


        
<div class="container">            
            
            <?php $title = "Box"; ?>
            
            <?php include 'nav.php'; ?>
            
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
                <p>Picture:</p><input type="file" name="holiday_picture" id="holiday_picture"><br>
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
        echo "Picture: $picture " ; 
        echo "Username: $holuser " ; 
        
    }
?>

<div class="container">
    <img src="images/img.png" />
    <h2><?php echo ucfirst($row["holiday_location"]); ?></h2>
    <p><?php echo ucfirst($row["holiday_description"]); ?></p>
    <p><?php echo ucfirst($row["holiday_rating"]); ?></p>
    <p><?php echo ucfirst($row["holiday_tags"]); ?></p>

</div>

        
<?php include_once("footer.php"); ?>        