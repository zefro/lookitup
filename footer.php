
      <footer >

             
     

		<h5>Works by Memory LEAK &copy (<?php 
			echo date('Y')?>)</h5>
	</footer>
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
      
</body>
</html>