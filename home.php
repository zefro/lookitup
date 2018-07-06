<?php
/* Displays user information and some useful messages */
$title ="Home";
$selected ="Home";
require_once( "header.php");
include_once( "footer.php");


?>

<div class="main_content body">







	<div class="pimg1">
    <div class="ptext">
      <span class="border">
       <a href="portfolio.php"> Welcome!</a>
      </span>
    </div>
  </div>
  <h1>Profiles</h1>
  <section class="section section-light">
     <?php 
   include_once( "profile.php");
   ?>
   

  </section>

	<div class="pimg2">
    <div class="ptext">
      <span class="border trans">
        Amazing places
      </span>
    </div>
  </div>

  <section class="section section-dark">
    <h2>Where to go!</h2>
    <p>
      <?php 
   include_once( "bs.php");
   ?>

    </p>

  </section>

  <div class="pimg3">
    <div class="ptext">
      <span class="border trans">
        Find US
      </span>
    </div>
  </div>

  <section class="section section-dark contacts">
    <h2>Statistics</h2>
    <?php  
 $connect = mysqli_connect("localhost", "root", "", "look_it_up");  

 $query13 = "SELECT active, count(*) as number FROM user GROUP BY active ";  
 $result = mysqli_query($connect, $query13);  
   ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Active', 'Number'],  
                          <?php  
                           while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["active"]."',".$row["number"]."],";  
                            }
                          ?>  
                     ]);  
                var options = {  
                      title: 'Active /Inactive',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
       
           <br ><br >  
            <h3 align="center" style="text-align: center;">Pie Chart Showing percentage of Active users(red) and Inactive Users</h3>
           <div style="width:900px; padding: 0; margin-left: 350px;">  
                 
                 
                <div id="piechart" style="width: 500px; height: 500px;"></div>  
           </div>  
      
 
          
  </section>

  <div class="pimg1">
    <div class="ptext">
      <span class="border">
       <a href="categories.php">LIFE IS ABOUT LIVING</a>
      </span>
    </div>
  </div>
</div>
	 




        
        <style type="text/css">

        body, html{
  background: none;
  height:100%;
  margin:0;
  font-size:16px;
  font-family:"Lato", sans-serif;
  font-weight:400;
  line-height:1.8em;
  color:#000000;
}
.main-content{
  margin-top: 100px;
}
 .pimg1, .pimg2, .pimg3{
  position:relative;
  opacity:0.80;
  background-position:center;
  background-size:cover;
  background-repeat:no-repeat;

  /*
    fixed = parallax
    scroll = normal
  */
  background-attachment:fixed;
}

.pimg1{
  background-image:url('nai2.jpg');
  min-height:250px;
}

.pimg2{
  background-image:url('nai4.jpg');
  min-height:400px;
}

.pimg3{
  background-image:url('nairobi-kenya-wallpaper.jpg');
  min-height:400px;
}

.section{
	height: auto;
  text-align:center;
  padding:50px 80px;
}

.section-light{
  padding:10px 0px;
  background-color:#fff;/*#f4f4f4*/
  color:#666;
}

.section-dark{
  height: auto;
   padding:10 0px;
  background-color:#000000;
  color:#ddd;
}

.ptext{
  position:absolute;
  top:50%;
  width:100%;
  text-align:center;
  color:#000;
  font-size:27px;
  letter-spacing:8px;
  text-transform:uppercase;
}

.ptext .border{
  /*background-color:#000000;*/
  background: #E2472F;
  color:#fff;
  padding:20px;
}

.ptext .border.trans{
  background-color:transparent;
}

@media(max-width:568px){
  .pimg1, .pimg2, .pimg3{
    background-attachment:scroll;
  }
}

h5{
	color: #fff;
	margin-top: 20px;
}

h1{
 text-align: center;
  color: #000;
  margin-top: 20px;
}



        </style>

          