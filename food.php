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
require 'Connect.php';
include_once('header.php');
$matslides = [];
$query = mysqli_query($con,'SELECT * FROM lokasjoner WHERE KategoriID = 1');
while($rows = mysqli_fetch_assoc($query)){
    $matslides[] = $rows;
};
        
?> 
			
			<a href="food.php" class = menucircle2 id = food2> <p class = "menutext2" id = "menutext21"><img src="img/icons/food-27.png" alt="icons"></p></a>
			
			<a href="transport.php" class = menucircle2 id = transport2> <p class = "menutext2" id = "menutext22"><img src="img/icons/transport-27.png" alt="icons"></p></a>
			
			<a href="shop.php" class = menucircle2 id = shopping2> <p class = "menutext2" id = "menutext23"><img src="img/icons/shopping-27.png" alt="icons"></p></a>
			
			<a href="activities.php" class = menucircle2 id = activities2> <p class = "menutext2" id = "menutext24"><img src="img/icons/activities-27.png" alt="icons"></p></a>
			
		    <!-- End of main navbar -->
		
        <div class="slide-container">
            
            <?php foreach ($matslides as $matslide) { ?>
            
            <div class="Slide fade">
                
                <img src="<?= $matslide['Bilde'] ?>" style="width:100%">
	            <div class="textbox">
                     <h3><?= $matslide['Navn'] ?></h3>
			         <p><?= $matslide['Beskrivelse'] ?></p>
                     <p>Avstand: <?= $matslide['Avstand'] ?></p>
                     <p>Åpningstid: <?= $matslide['Open'] ?></p>
                     <p>Stengetid: <?= $matslide['Stengetid'] ?></p>
 				     <p><a href="<?= $matslide['Lenke'] ?>">Lenke til nettsiden</a></p>
                </div>
            
            </div>              
            <a class="back" onclick="plusSlides(-1)">&#10094;</a>
            <a class="forward" onclick="plusSlides(1)">&#10095;</a>

            <?php } ?>
            
        </div>
        


          <!-- End of slider -->
		
		   
		
		 <script>
   
		var slideIndex = 1;
     
	    showSlides(slideIndex);

    
				function plusSlides(n) {
    
					showSlides(slideIndex += n);
				}

				function currentSlide(n) {
  
					showSlides(slideIndex = n);
   
				}

				function showSlides(n) {
    
					var i;
    
					var slides = document.getElementsByClassName("Slide");
    
					var dots = document.getElementsByClassName("dot");
   
					if (n > slides.length) {slideIndex = 1} 
    
					if (n < 1) {slideIndex = slides.length}
    
					for (i = 0; i < slides.length; i++) {
     
						slides[i].style.display = "none"; 
    
					}
   
		for (i = 0; i < dots.length; i++) {
     
			dots[i].className = dots[i].className.replace(" active", "");
  
		}
 
		slides[slideIndex-1].style.display = "block"; 
  
		dots[slideIndex-1].className += " active";
		
			}
       
    </script>
		
		
	     </body>
       </html>
                
            
