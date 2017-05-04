<!doctype html>
<html>	
    
    <head>
        <link rel = "stylesheet" type = "text/css" href = "stylesheet.php" />
       <link href="https://fonts.googleapis.com/css?family=Oswald:200,400" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500" rel="stylesheet">
    </head>	

    <body>
        <div id="container">
			<?php 

include_once('header.php');
?>
            <div class = menucircle id = menucircle1> <p class = "menutext" id = "menutext1"><img src="img/icons/coffee-8-48.png" alt="icons"><br><a href="matogdrikke.php">Mat & drikke</a></p> </div>
			<div class = menucircle id = menucircle2> <p class = "menutext" id = "menutext2"><img src="img/icons/bus-48.png" alt="icons"><br><a href="newside.php">Transport</a></p></div>
			<div class = menucircle id = menucircle3> <p class = "menutext" id = "menutext3"><img src="img/icons/cart-59-48.png" alt="icons"><br><a href="newside.php">shop</a></p> </div>
			<div class = menucircle id = menucircle4> <p class = "menutext" id = "menutext4"><img src="img/icons/soccer-2-48.png" alt="icons"><br><a href="newside.php">Aktiviteter</a></p> </div>
			<div class = menucircle id = menucircle5> <p class = "menutext" id = "menutext5"><img src="img/icons/calendar-2-48.png" alt="icons"><br><a href="newside.php">Arrangement</a></p> 
			
			</div>  <!-- End of main navbar -->


			<?php 
		include_once('footer.php');
?>
        </div>  
    </body>
    
</html>