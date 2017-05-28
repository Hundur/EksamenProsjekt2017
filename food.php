<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" type = "text/css" href = "style.php" /> 
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Mat & Drikke</title>

        <!-- Google font Import --> 

        <link href="https://fonts.googleapis.com/css?family=Oswald:200,400,500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500" rel="stylesheet">
	</head>
    
	<body>
        <?php 
            require 'Connect.php';
            include_once('header.php');
            $slides = [];
            $query = mysqli_query($con,'SELECT * FROM lokasjoner WHERE KategoriID = 1');
            while($rows = mysqli_fetch_assoc($query))   
            {
                $slides[] = $rows;
            };
            require 'sideknapper.php';
            require 'slides.php';
            require 'slidescript.php';
        ?> 
    </body>
</html>              