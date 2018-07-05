
<?php //





                                       $db = new PDO('mysql:host=127.0.0.1;dbname=look_it_up','root','');
                                       
                                       $query = $db->prepare("SELECT * FROM user");
                                       $query->execute();

                                       if($query->rowCount()>0)
                                       {
                                        while ($ftch = $query->fetch(PDO::FETCH_ASSOC)) 
                                        {
                                          $uid= $ftch['id'];
                                          $fname= $ftch['first_name'];
                                           $lname= $ftch['last_name'];
                                            $descripition=$ftch['email'] ; 
                                             $bio=$ftch['bio'] ; 
                                              $pps=$ftch['profile_pic'] ; 
                                              $name=$fname.' '.$lname;

                                            
                                      


                                                                                  
                                                                                   ?>
<a href="#biz2">
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
  }  ?>
<style type="text/css">
  import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600');

*{
  margin: 0;
  padding: 0;
}

body{
  background: #fff;
  font-family: 'Open Sans', sans-serif;
}

.app{
  display: inline-block;
  height: auto;
  
}



.taint{
  display: inline-block;
  width: 500px;
  height: 200px;
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
  font-size: 14px;
  color: white;
  font-weight: 900;
}


.head span{
  color: white;
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





</style>
