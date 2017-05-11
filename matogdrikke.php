<!doctype html>
<html>	
    
    <head>
        <link rel = "stylesheet" type = "text/css" href = "subsidecss.php" />
       <link href="https://fonts.googleapis.com/css?family=Oswald:200,400" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>	

    <body>
        
            
        
            <div class = menucircle id = food> <p class = "menutext" id = "txtfood"><img class="picU" src="img/icons/food.png" alt="icons"><br><a href="index.php">Mat & drikke</a></p> 
            </div>
			<div class = menucircle id = transport> <p class = "menutext" id = "txttransport"><img class="picU" src="img/icons/transport.png" alt="icons"><br><a href="newside.php">Transport</a></p></div>
			<div class = menucircle id = shopping> <p class = "menutext" id = "txtshopping"><img class="picU" src="img/icons/shopping.png" alt="icons"><br><a href="newside.php">shop</a></p> 
            </div>
			<div class = menucircle id = activities> <p class = "menutext" id = "txtactivities"><img class="picU" src="img/icons/activities.png" alt="icons"><br><a href="newside.php">Aktiviteter</a></p> </div>
			<div class = menucircle id = arrangement> <p class = "menutext" id = "txtarrangement"><img class="picU" src="img/icons/arrangement.png" alt="icons"><br><a href="newside.php">Arrangement</a></p> 
			</div>  
        
        <div id="container">
            <img class="Slides" src="img/restauranter/dognvill.jpg" style="width:100%">
            <img class="Slides" src="img/restauranter/noodles.jpg" style="width:100%">
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
            
        <!-- End of main navbar -->

            
               
        </div>  
        
        
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