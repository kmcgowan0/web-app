<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>

<div class="box">
    
    <img src="images/<?php echo "holiday_id"?>" />
    <h2><?php echo $row["holuday_location"]; ?></h2>
    <p><?php echo $description["holiday_description"]; ?></p>
    <p><?php echo $row["holiday_rating"]; ?></p>
    <p><?php echo $row["holiday_tags"]; ?></p>
</div>
        
<?php require_once("../includes/templates/footer.php");?>  