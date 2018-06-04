<?php
	if (isset($_POST['Submit'])) {
		$user=$_POST['username'];
		$pass=$_POST['password'];
		$rem=$_POST['remember'];
	
	if ( $em == $user and $pass == $ps) {
		if (isset($_POST['remember']) ) {

		setcookie('username',$user, time()+ (60*60*24*7));
		setcookie('password',$pass, time()+ (60*60*24*7));
	}
			session_start();
			$_SESSION['username'] = $user;
			header("location: profile.php");
	}else{
		echo "Invalid.<br> Click here to <a href='index.html'> try again</a>";
	}

	}else{
		header("location: index.php");
	}
