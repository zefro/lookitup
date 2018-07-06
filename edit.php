<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['edit'])) { //user logging in

        require 'change.php';

        
    }
    }

require_once( "header.php");
require_once( "footer.php");

?>
    <div id="sp" class="login">
        <div  
         class="avatar"><?php if($pp == null){
            echo '<img src="avatar.png" >' ;}else{ echo displayimg();} ?></div>
        <form method="POST" action="edit.php" enctype="multipart/form-data">
            <p>Profile Picture</p>
            <input type="file" name="file" placeholder="image">
            <p>First Name</p>
            <input type="text" name="fname1" placeholder="<?php echo $first_name;?>" value="" >
            <p>Last Name</p>
            <input type="text" name="lname1" placeholder="<?php echo $last_name; ?>" value="">
          
            <input type="hidden" name="mail" placeholder="<?php echo $email; ?>" value="<?php echo $email?>">
            <input type="hidden" name="id" placeholder="<?php echo $usern; ?>" value="<?php echo $usern?>">
            <p>Bio</p>
            <input type="text" name="bio1" placeholder="<?php echo $bio; ?>" value="">
            <input type="submit" name="edit" value="Edit">
        </form>
    </div>

    <style type="text/css">
        
.login{
     margin-top:100px;
      margin-bottom:100px;
    width: 60%; 
    height: 50%;
    background: #fff;
    color: #000;
    top: 50%;
    left: 50%;
    position: fixed;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding-top: 0px;
    padding-bottom: 0px;

    z-index: 1;
}

.avatar{
    width: 500px;
    height: 200px;
    border-radius: 0%;
    position: absolute;
    top: -60%;
    left: calc(27% - 50px);
}

h1{
    margin: 0;
    padding:0 0  20px;
    text-align: center;
    font-size: 22px;
}

.login p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.login input{
    width: 100%;
    margin-bottom: 20px;
}

.login input[type="text"], input[type="password"]{
    border: none;
    border-bottom: 1px solid #000;
    background: transparent;
    outline: none;
    color: #000;
    height: 40px;
    width: 600px;
    font-size: 14px;
    }

.mg{
     width: 500px;
    height: 200px;
    border-radius: 0%;

  
}
.login input[type="submit"]{
    border: none;
    outline:none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;

}

.login input[type="submit"]:hover{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}
    </style>

