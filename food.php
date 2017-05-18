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
			
			<a href="food.php" class = menucircle2 id = food2> <p class = "menutext2" id = "menutext21"><img src="img/icons/food-27.png" alt="icons"></p></a>
			
			<a href="transport.php" class = menucircle2 id = transport2> <p class = "menutext2" id = "menutext22"><img src="img/icons/transport-27.png" alt="icons"></p></a>
			
			<a href="shop.php" class = menucircle2 id = shopping2> <p class = "menutext2" id = "menutext23"><img src="img/icons/shopping-27.png" alt="icons"></p></a>
			
			<a href="activities.php" class = menucircle2 id = activities2> <p class = "menutext2" id = "menutext24"><img src="img/icons/activities-27.png" alt="icons"></p></a>
			
			<a href="arrangements.php" class = menucircle2 id = arrangement2> <p class = "menutext2" id = "menutext25"><img src="img/icons/arrangement-27.png" alt="icons"></p></a> 
			
		<!-- End of main navbar -->
		
			<div id="container">
                
            <div class="Slides">
                 <div class="textbox">
                    <h3><b></b></h3>
				    <p></p>
					 <p><a href="http://www.dognvillburger.no/">www.dognvillburger.no</a></p>
                </div>
                <img src="img/Restaurants/dognvill.jpg" style="width:100%">
            </div>
                
            <div class="Slides">
                 <div class="textbox">
                    <h3><b>Kantina Vulkan</b></h3>
				    <p></p>
                </div>
                <img src="img/Restaurants/kantina.jpg" style="width:100%">
            </div>
	   <button class="w3-button w3-transparent w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-transparent w3-display-right" onclick="plusDivs(1)">&#10095;</button>
		</div>
    
                <!-- End of container -->
		
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);
        
        function plusDivs(n) {
        showDivs(slideIndex += n);
        }
        
        function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("Slides");
        if (n > x.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
        }
        x[slideIndex-1].style.display = "block";  
        }
    </script>
		
    </body>
        
</html>
