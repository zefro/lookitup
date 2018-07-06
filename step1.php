<?php
	require_once( "header.php");
	require_once( "footer.php");

	if (isset($_POST['next'])) {
	include_once 'db.php';
	//$_SESSION[ 'u_id'];


		$image1= addslashes($_FILES['file1']['tmp_name']);
		$image1= file_get_contents($image1);
		$image1= base64_encode($image1);



		$fpic = $image1;
		$franchName = mysqli_real_escape_string($mysqli, $_POST['franchiseName']);
		$location = mysqli_real_escape_string($mysqli, $_POST['location']);
		$phonenumber = mysqli_real_escape_string($mysqli, $_POST['contact']);
		$category= mysqli_real_escape_string($mysqli, $_POST['category']);
		$about = mysqli_real_escape_string($mysqli, $_POST['about']);
		$userid =$_SESSION['id'];
		

	$sql = "INSERT INTO franchise (user_id, franchise_name, phone_number, location, about, category, franchise_pic) VALUES ('$userid','$franchName','$phonenumber','$location','$about','$category', '$fpic');";
	mysqli_query($mysqli, $sql);
	header("Location: home.php");
	exit();
}else{
 echo "error posting";
}

?>