<!doctype html>
<html>	
    
    <head>
        <link rel = "stylesheet" type = "text/css" href = "subsidecss.php" />
       <link href="https://fonts.googleapis.com/css?family=Oswald:200,400" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500" rel="stylesheet">
    </head>	

    <body>
        
            
            <?php 
include_once('header.php');
?>		
        
            <div class = menucircle id = foodU> <p class = "menutext" id = "txtfood"><img src="img/icons/food.png" alt="icons"><br><a href="index.php">Mat & drikke</a></p> 
            </div>
			<div class = menucircle id = transportU> <p class = "menutext" id = "txttransport"><img src="img/icons/transport.png" alt="icons"><br><a href="newside.php">Transport</a></p></div>
			<div class = menucircle id = shoppingU> <p class = "menutext" id = "txtshopping"><img src="img/icons/shopping.png" alt="icons"><br><a href="newside.php">shop</a></p> 
            </div>
			<div class = menucircle id = activitiesU> <p class = "menutext" id = "txtactivities"><img src="img/icons/activities.png" alt="icons"><br><a href="newside.php">Aktiviteter</a></p> </div>
			<div class = menucircle id = arrangementU> <p class = "menutext" id = "txtarrangement"><img src="img/icons/arrangement.png" alt="icons"><br><a href="newside.php">Arrangement</a></p> 
			</div>  
        
        <div id="container">
            
        <!-- End of main navbar -->

            
            <?php 
		include_once('footer.php');
?>       
        </div>  
    </body>
    
</html>