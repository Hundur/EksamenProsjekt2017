<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" type = "text/css" href = "css/style.php" /> 
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Aktiviteter</title>

        <!-- Google font Import --> 

        <link href="https://fonts.googleapis.com/css?family=Oswald:200,400,500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500" rel="stylesheet">
	</head>
    
	<body>		
		<?php    
            require 'requires/Connect.php';/* Filen for å koble til database */
            include_once('requires/header.php');/* Header for hele nettsiden (går igien)*/
            $slides = [];
            $query = mysqli_query($con,'SELECT * FROM lokasjoner WHERE KategoriID = 4');/* Spørring som fetcher data fra DB */
            while($rows = mysqli_fetch_assoc($query))/* While loop som fetcher data fra databasen DB så får row verdien */
            {
                $slides[] = $rows;
            }; 
            require 'requires/sideknapper.php';/* Sidebar for nettsiden */
            require 'requires/slides.php';/* Slides for nettsiden */
            require 'requires/slidescript.php';/* Javascript for slides */
        ?> 
    </body>
</html>
