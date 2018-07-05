<?php
$mysqli = new Mysqli("localhost","root","","look_it_up");

$image= addslashes($_FILES['file']['tmp_name']);
$image= file_get_contents($image);
$image= base64_encode($image);


$id = $mysqli->real_escape_string($_POST['id']);
$fname = $mysqli->real_escape_string($_POST['fname1']);
$lname = $mysqli->real_escape_string($_POST['lname1']);
$mail = $mysqli->real_escape_string($_POST['mail']);
$pic = $image;
$bio = $mysqli->real_escape_string($_POST['bio1']);


$result = $mysqli->query("SELECT * FROM user WHERE email='$mail'AND id='$id'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: error.php");
}
else { // User exists
    $user = $result->fetch_assoc();

    if ($_POST['mail'] == $user['email']){
        
        
          
     $sql = " UPDATE user SET first_name = '$fname', last_name = '$lname', profile_pic = '$pic', bio = '$bio' WHERE email='$mail'AND id='$id'" ;

     


 
         $mysqli->query($sql);

        
        header("location: logout.php");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
}


?>