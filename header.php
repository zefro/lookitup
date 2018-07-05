<?php
session_start();
//Displays user information and some useful messages 
require_once( "db.php");
//Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
     //Makes it easier to read
    $usern = $_SESSION['id'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
    $bio = $_SESSION['bio'];
    $pp = $_SESSION['profile_pic'];
    $title= $first_name.' '.$last_name;


function displaylist(){
  $id = $_SESSION['id'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
    $pp = $_SESSION['profile_pic'];
    $bio = $_SESSION['bio'];



  $mysqli = new Mysqli("localhost","root","","look_it_up");
    $result1 = $mysqli->query("SELECT * FROM user ");
    $user1 = $result1->fetch_assoc();
foreach ( $result1 as $result1 ) 
    { 
    echo '<img  height="1000px" width="750px" src="data:profile_pic;base64,'.$user1['profile_pic'].' "><p>'.$user1['email'].'</p>';
}
}
function displayimg(){
  $id = $_SESSION['id'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
    $pp = $_SESSION['profile_pic'];
    $bio = $_SESSION['bio'];

  $mysqli = new Mysqli("localhost","root","","look_it_up");
    $result1 = $mysqli->query("SELECT * FROM user WHERE id ='$id' AND email='$email'");
    $user1 = $result1->fetch_assoc();

    echo '<img class="mg" height="1000px" width="750px" src="data:profile_pic;base64,'.$user1['profile_pic'].' ">';

}

}
function displayfimg(){
  $id = $_SESSION['id'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
    $pp = $_SESSION['profile_pic'];
    $bio = $_SESSION['bio'];

  $mysqli = new Mysqli("localhost","root","","look_it_up");
    $result3 = $mysqli->query("SELECT * FROM franchise WHERE ");
    $user2 = $result3->fetch_assoc();

    echo '<img class="mg" height="1000px" width="750px" src="data:profile_pic;base64,'.$user2['franchise_pic'].' ">';

}



    ?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="modal.css">		
	<link rel="stylesheet" type="text/css" href="header.css">
	<link rel="stylesheet" type="text/css" href="businesses.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet"> 
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script> 
  <script src="JavaScript%20Main.js"></script>
</head>
<body>
	<header>
		<div class="wrapper">
			<nav>

            <div class="menu-icon">
                              <i class="fa fa-bars fa-2x"></i>
            </div>
            <style type="text/css">
              
            </style>
            
            <div class="logo"> <img src="lg.jpg"><input id="search" type="text" name="search" placeholder="search"><button id="sc"><strong>Search</strong></button></div>

            <div class="menu">
				<ul>
			
			<li  class="<?php 
				if($selected=="Home"){
				echo 'selected-link';}
			?>" ><a href="home.php">Home</a></li>
			<li class="<?php 
				if($selected=="Portfolio"){
				echo 'selected-link';}
			?>" ><a href="portfolio.php">Portfolio</a></li>

      <li><a href="#wrap2" id="prof2">Add Business</a></li>
			<li><a href="#wrap1" id="prof">Profile</a></li>
			
			<li class="<?php 
				if($selected=="About"){
				echo 'selected-link';}
			?>" ><a href="about.php">About</a></li>
			<li class="<?php 
				if($selected=="index"){
				echo 'selected-link';}
			?>" ><a href="index.php">Logout</a></li>
			
		</ul>
	</div>
		</nav>
		</div>

		<div class="wrap wrap1" id="mode">
  <div class="cont">
    <div class="profile-card">
    	<span class="close3">&times;</span>
        <h2><?php echo $title;?></h2>
      <div class="img-container">
        <?php if($pp == null){
            echo '<img src="avatar.png" >' ;}else{ echo displayimg();} ?>
        
      </div>
      <div class="role"><p>Owner</p></div>
      <div class="bt"><a href="portfolio.php">Portfolio</a></div>
      <div class="bt2"><a href="edit.php">Edit Profile</a></div>
    </div>
    <div class="data">
      <div class="inner-data">
        <div class="data-content">
        <p>Franchise</p>
        <span>1</span>
      </div>
      <div class="data-content">
        <p>Rank</p>
        <span>5</span>
      </div>
      <div class="data-content">
        <p>Rating</p>
        <span>4.5</span>
      </div>
      </div>
    </div>

    <div class="quote">
      <p><?php echo $bio;?></p>
      
    </div>
  </div>
</div>

            
            <div class="wrap wrap2" id="mode2">
              <div class="cont1">
              <div class="business-card">
            <span class="close4">&times;</span><br><br>
            <h2>Add Franchise</h2></div>
              <form class="businessform" action="step1.php" method="POST" enctype="multipart/form-data">
                <div class="data">
      <h2><center>Details</center></h2>
      <h4>Image</h4>
      <input type="file" name="file1" placeholder="Franchise Image">
      <h4>Name</h4>
      <input type="text" name="franchiseName" placeholder="Franchise Name">
      <h4>Location</h4>
      <input type="text" name="location" placeholder="Location">
      <h4>Category</h4>
      <input type="text" name="category" placeholder="Category">
      <h4>Contact</h4>
      <input type="text" name="contact" placeholder="Phone Number">
      <h4>Description</h4>
    </div>
      <textarea type="text" name="about" placeholder="whats your business about?" class="abt"></textarea><br>
      
      <button type="submit" name="next" class="bt3">NEXT</button>
    </form>
</div>
              </div>

	</header>
	<script src="profile.js" type="text/javascript"></script>
		<section class="sec1"></section>
	