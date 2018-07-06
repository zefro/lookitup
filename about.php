<?php
$title ="About";
$selected ="About";
require_once( "header.php");
?>
<div class="main-content body">
        
  <div class="pimg1">
    <div class="ptext">
      <span class="border">
       <a href="home.php"> Look It Up!</a>
      </span>
    </div>
  </div>

  <section class="section section-light">
    <h2>Brief</h2>
    <p>
     The look it up system is a proposed system whereby one can search for things to do according to what options have been laid out for them. The user will have three lists of fun and popular activities from which they'll choose one activity per list. The system will then narrow down the activities and provide the user with a list of places that have the activities they want to take part in. The system will also consist of a business owner sign up and log in, whereby different owners will have the opportunity to advertise themselves. The business owner will have an option of writing a brief description of their facility after which they will provide the system with a list of activities that they offer.</p>
    <p>
    The businesses (activities offered by the business for the users) will be ranked for the user according to what the users have chosen. There will also be a search criteria for listing down the businesses according to other aspects such as the users budget and the location of the businesses.
    </p>
    <p>
    A feature for gambling will also be availed for the user. It will be a fun interaction button where the system will randomly generate a list of fun activities for the user.

    </p>
  </section>

  <div class="pimg2">
    <div class="ptext">
      <span class="border trans">
        PURPOSE
      </span>
    </div>
  </div>

  <section class="section section-dark">
    <h2>PURPOSE</h2>
    <p>
      In a city with a variety of fun and adventurous locations,the system  makes it easier to plan yourself, to get to know new locations and to essentially overcome boredom and confusion when it comes to going out. The system also provides a platform for business owners to advertise themselves and to keep the quality of their services up due to ensure their customer rating remains high.

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
    <h2>CONTACTS</h2>
    <p>
      Email: lookitup@gmail.com <br>
      Telephone: +254 713141007 <br>
    </p>
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
  background-image:url('image3.jpg');
  min-height:250px;
}

.pimg2{
  background-image:url('pexels-photo-385997.jpeg');
  min-height:400px;
}

.pimg3{
  background-image:url('nairobi-kenya-wallpaper.jpg');
  min-height:400px;
}

.section{
  text-align:center;
  padding:50px 80px;
}

.section-light{
  background-color:#fff;/*#f4f4f4*/
  color:#666;
}

.section-dark{
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
  background-color:#000000;
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

</style>
<script type="text/javascript">

      // Menu-toggle button

      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })


      </script>
       <script src="jQuery.js" type="text/javascript"></script> 
