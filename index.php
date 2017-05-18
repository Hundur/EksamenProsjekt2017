<!doctype html>
<html>
    <head>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel = "stylesheet" type = "text/css" href = "style.php" /> 
	  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!-- Google font Import --> 

       <link href="https://fonts.googleapis.com/css?family=Oswald:200,400,500" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500" rel="stylesheet">
	</head>
	<body>
		
		
		<?php 

include_once('header.php');
?> 
		    <div id="heading">Vulkan <b>Guiden</b></div>
		
			<a href="food.php" class = menucircle id = food> <p class = "menutext" id = "menutext1"><img src="img/icons/food.png" alt="icons"><br>Food & drinks</p></a>
		
			<a href="transport.php" class = menucircle id = transport> <p class = "menutext" id = "menutext2"><img src="img/icons/transport.png" alt="icons"><br>Transport</p></a>
		
			<a href="shop.php" class = menucircle id = shopping> <p class = "menutext" id = "menutext3"><img src="img/icons/shopping.png" alt="icons"><br>shop</p></a>
		
			<a href="activities.php" class = menucircle id = activities> <p class = "menutext" id = "menutext4"><img src="img/icons/activities.png" alt="icons"><br>Activities</p></a>
		
			<a href="arrangements.php" class = menucircle id = arrangement> <p class = "menutext" id = "menutext5"><img src="img/icons/arrangement.png" alt="icons"><br>Arrangements</p></a>  <!-- End of main navbar -->
  
		
		<script>
/* Jquery Code */ 
	
$(document).ready(function() {
    $(".toggle").click(function() {
       $('.links').slideToggle();
    });
    $(window).resize(function() {
       if ($(window).width() > 768) {
          $('.links').show();
       } else {
          $('.links').hide();
       }
    });
});
	
</script>
	<!-- End of container -->
    </body>
	
    
</html>