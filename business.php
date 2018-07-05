<?php


$fname =$_POST['fname'];
$location = $_POST['location'];
$category =$_POST['category'];
$fp =$_POST['franchise_pic'];
$description = $_POST['description'];
?>

<div id="main">
            <div id="logo"><img src="DAFT%20CREATION2.png"/></div>
            <div id="mountainImg"><img src="Mountain.png" width="100%"/></div>
        </div>
        
        <div id="btn">
            <img src="Playpng.png" width="20px"/>
        </div>

<?php 
/* Main page with two forms: sign up and log in */
include_once( "footer.php");

?>