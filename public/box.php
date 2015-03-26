<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>


    
  <?php  
    $sql = "SELECT holiday_location, holiday_description, holiday_rating, holiday_user FROM holiday";
$result = mysqli_query($connection, $sql) or die("Error: ".mysqli_error($connection));

    if(isset($_POST["sort"])) {
        $sort = $_POST["sort-by"];
        
        if(strcmp($sort, "new") == 0) {
            $query = "SELECT * FROM holiday ORDER BY holiday_id DESC";
        } else if (strcmp($sort, "best") == 0) {
            $query = "SELECT * FROM holiday ORDER BY holiday_rating DESC";
        }
        $result = mysqli_query($connection, $query); 
    } else {
        $query = "SELECT * FROM holiday ORDER BY holiday_id DESC";
    }
    

    
    

    if(!$result) {
        die("Query Error");  
    }

while($row = mysqli_fetch_array($result))
{ ?>
    <div class="box">
        <img src="images/hol.png" />
        <h2><?php echo ($row["holiday_location"]);?></h2>
        <p><?php echo ($row["holiday_description"]);?></p> 
        <p>Rating: <?php echo ($row["holiday_rating"]);?>/5 Stars</p> 
        <p>Posted by: <?php echo ($row["holiday_user"]);?></p> 
    </div>
        <div class="clearfix"></div>
<?php
}
?>

    
    
        
<?php require_once("../includes/templates/footer.php");?>  