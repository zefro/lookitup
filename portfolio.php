<?php 


$title ="Portfolio";
$selected ="Portfolio";
require_once( "header.php");
include_once( "footer.php");
 ?>

 <div class="main_content body">

<div id="main">
            <div id="logo"><h1><?php echo $title;?></h1></div>
            
        
        


        <?php //





                                       $db = new PDO('mysql:host=127.0.0.1;dbname=look_it_up','root','');
                                       
                                       $query = $db->prepare("SELECT * FROM franchise");
                                       $query->execute();

                                       if($query->rowCount()>0)
                                       {

                                        while ($ftch = $query->fetch(PDO::FETCH_ASSOC)) 
                                        {
                                          $uid= $ftch['user_id'];
                                          $location= $ftch['location'];
                                           $franchname= $ftch['franchise_name'];
                                            $descripition=$ftch['about'] ; 
                                             $category=$ftch['category'] ; 
                                              $fp=$ftch['franchise_pic'] ; 
                                            
                                      	if($uid == $usern){




                                                                                    ?>
<a href="#biz2">
<div class="app">
  <div class="tain">
    <div class="img-tain">
      <?php if($fp == null){
            echo '<img src="avatar.png" >' ;}else{ echo '<img class="mg" height="1000px" width="750px" src="data:profile_pic;base64,'.$fp.' ">';} ?>
      
    </div>
    
    <div class="tent">
      <div class="head">
        
        <input type="hidden" name="fname" value="<?php echo $franchname; ?>">
         <input type="hidden" name="location" value="<?php echo $location; ?>">
          <input type="hidden" name="descripition" value="<?php $descripition; ?>">
           <input type="hidden" name="user_id" value="<?php echo $uid; ?>">
            <input type="hidden" name="category" value="<?php echo $category; ?>">
             <input type="hidden" name="franchise_pic" value="<?php echo $fp; ?>">
           
          <p><?php echo $franchname; ?></p>
          <h6><?php echo $location; ?></h6>
          <span><?php echo $descripition; ?></span>
      </div>
      <div class="datas">
        <div class="inner-datas">
          <p>Ranking</p>
          <span></span>
        </div>
        <div class="inner-datas">
          <p>Stars</p>
          <span></span>
        </div>
      </div>
    </div>

</div>

  </div>
</a>

<?php }
}
  }  ?>
  </div>
        <div id="btnz">
            <img src="logo.png" width="20px"/>
        </div>
<style type="text/css">
    body{
    margin: 0px;
    padding: 0px;
    height: 200%;

  font-family: 'Open Sans', sans-serif;
    background-color:#0A2B3E;
}
#main{
    width: 100%;
    height:1000px;
    background: linear-gradient(#66FFFD,#FFF);
    
    top:0%;
    left: 50%;
    
    overflow: hidden;
}
#logo{
    height: 100px;
    width: 100%;
    position: absolute;
    top: 80%;
    margin-top: -50px;
    text-align: center;
}
#mountainImg img{
    height: 350px;
    width: 100%;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top:300px;
}
#btnz{
    height: 60px;
    width: 60px;
    border-radius: 50%;
    background: linear-gradient(#8EFFFc,#6AF0D5);
    position: absolute;
    top:80%;
    left: 50%;
    transform: translateX(-50%);
    z-index: 999;
    box-shadow: 0 0 0 8px rgba(140,237,243,.2),0 0 0 16px rgba(140,237,243,.3);
    cursor: pointer;
}
#btnz img{
    position: absolute;
    top:50%;
    left: 50%;
    transform: translate(-50%,-50%);
}

h1{
	font-size: 86px;
}




.app{
   margin-top: 100px;
   margin-left: 100px;
  display: inline-block;
  height: auto;
  

}



.tain{
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
  padding: 30px 40px;
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
  font-size: 12px;
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

.img-tain:before{
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  border-left: 30px solid #1DA1F2;
  border-right: 30px solid transparent;
  border-top: 30px solid #1DA1F2;
  border-bottom: 30px solid transparent;
  cursor: pointer;
  border-top-left-radius: 5px;
}

.img-tain:after{
  font-family: fontawesome;
  content:"\f099";
  position: absolute;
  top: 10px;
  left: 12px;
  color: #fff;
  font-size: 18px;
}



</style>
</div>
 </div>