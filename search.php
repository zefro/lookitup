<?php
 
                                       
 

require_once( "header.php");
include_once( "footer.php");  

$s = $_POST['search'];


$db = new PDO('mysql:host=127.0.0.1;dbname=look_it_up','root','');
                                       
$result = $db->prepare("SELECT * FROM franchise where franchise_name='$s'");
                                       $result->execute();

$result1 = $db->prepare("SELECT * FROM user where last_name='$s' or first_name='$s' ");
                                       $result1->execute();
if ( $result->rowCount() == 0 &&  $result1->rowCount() == 0 ){ // User doesn't exist
    $output = "no results";
    print_r("$output");
}
else {

	while ($ftch = $result->fetch(PDO::FETCH_ASSOC)) 
                                        {
                                          $fid= $ftch['id'];
                                           $uid= $ftch['user_id'];
                                          $location= $ftch['location'];
                                           $franchname= $ftch['franchise_name'];
                                            $descripition=$ftch['about'] ; 
                                             $category=$ftch['category'] ; 
                                              $fp=$ftch['franchise_pic'] ; 
		# code...
	

    ?>
    <div class="main_content body">

<div class="app">
  <div class="tain">
    <div class="img-tain">
      <?php if($fp == null){
            echo '<img src="avatar.png" >' ;}else{ echo '<img class="mg" height="1000px" width="750px" src="data:profile_pic;base64,'.$fp.' ">';} ?>
      
    </div>
    
    <div class="tent">
      <div class="head">
           
          <p><?php echo $franchname; ?></p>
          <h6><?php echo $location; ?></h6>
          <span><?php echo $descripition; ?></span>
      </div>
      <div class="datas"">
        <div class="inner-datas">
          <span>  <form method="POST" action="rank.php">

          
           <input type="hidden" name="user_id" value="<?php echo $usern; ?>">
           

           <input type="hidden" name="id" value="<?php echo $fid; ?>">
         
    

    <input type="number" name="rating" placeholder="Rate 1 - 5" >
    <button type="submit" id="sd" name="rank" >Rank</button>

     </form></span>
           
        <div class="inner-datas">
          <p>Rate</p>
          <span><?php echo $sum;?></span>
        </div>
      </div>
    </div>

</div>
</div>
  </div>

</div>
    <?php
	}


 while ($ftch = $result1->fetch(PDO::FETCH_ASSOC)) 
                                        {
                                          $uid= $ftch['id'];
                                          $fname= $ftch['first_name'];
                                           $lname= $ftch['last_name'];
                                            $descripition=$ftch['email'] ; 
                                             $bio=$ftch['bio'] ; 
                                              $pps=$ftch['profile_pic'] ; 
                                              $name=$fname.' '.$lname;

                                            
                                      


                                                                                  
                                                                                   ?>

<div class="app">
  <div class="taint">
    <div class="img-tain">
      <?php if($pps == null){
            echo '<img src="avatar.png" >' ;}else{ echo '<img class="mg" height="1000px" width="750px" src="data:profile_pic;base64,'.$pps.' ">';} ?>
      
    </div>
    
    <div class="tent">
      <div class="head">
        
      
           
          <p><?php echo $name; ?></p>
          <h6><?php echo $email; ?></h6>
      </div>
      <div class="datas">
        <div class="inner-datas">
          <p></p>
          <span></span>
        </div>
        <div class="inner-datas">
          <p></p>
          <span></span>
        </div>
      </div>
    </div>

</div>

  </div>
<?php
}
}
?>

<style type="text/css">
 /* import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600');*/




*{
  margin: 0;
  padding: 0;
}

body{
  background: #fff;
  font-family: 'Open Sans', sans-serif;
}

.app{
	margin-top: 200px;
  display: inline-block;
height: auto;
width: 500px;


}



.tain{
  padding: 10px 0px;
 display: inline-block; 
  width: 500px;
  height: 300px;
  background: #fff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0,0,0,0.5);
}

.img-tain{
  width: 40%;
  height: 100%;
  float: left;
/*position: relative;*/
}

.img-tain img{
  width: 100%;
  height: 100%;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
}

.tent{
  width: 60%;
  height: 100%;
  float: left;
  padding: 30px 20px;
  box-sizing: border-box;
}

.head{
  overflow: hidden;
  padding-bottom: 30px;
}

.head p{
  font-size: 18px;
  color: red;
  font-weight: 600;
}

.head span{
  color: #000;
  font-size: 10px;
}

span{
  display: inline-block;
}
h6{
  color: grey;
}

.datas{
  width: 90%;
  overflow: hidden;
}

.inner-datas{
  width: 50%;
  float: left;
  text-align: left;
  color: #aaabaf;
}

.inner-datas p{
  font-size: 14px;
  padding-bottom: 5px;
}

.inner-datas span{
  font-size: 18px;
  font-weight: 400;
}


input[type="number"]{
  padding: 0px 0px;
  width: 50px;
}

#sd{
  display: inline-block;
  background: #E2472F;
  color: #fff;
    height: 32px;
    width: 100px;
    bottom: 8%;
    left: 17%;
    border-style: none;
    border: 1px solid #fff;
    padding: 0px 0px;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.5s ease;
}

#sc:hover{
   color: #fff;
   background: #ff8300;

</style>