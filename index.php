<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" type = "text/css" href = "style.php" /> 
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Vulkan Guiden</title>

        <!-- Google font Import --> 

        <link href="https://fonts.googleapis.com/css?family=Oswald:200,400,500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500" rel="stylesheet">
	</head>
    
	<body>

        <?php 
            require 'Connect.php';/* Filen for å koble til database */
            include_once('header.php');/* Header for hele nettsiden (går igien)*/
            $indexknapper = []; /* Array og indekser definert */
            $food;
            $transport;
            $shopping;
            $activities;
            $contact;
            $query = mysqli_query($con,'SELECT Kategori FROM kategorier');/* Spørring som fetcher data fra databasen*/
            while($rows = mysqli_fetch_assoc($query))/* While loop som fetcher data fra databasen DB så får row verdien */
            {
                $indexknapper[] = $rows; /* Gir arrayen informasjon*/
            };

            $food = $indexknapper[0]; /* Verdier til arrayen */
            $transport = $indexknapper[1];
            $shopping = $indexknapper[2];
            $activities = $indexknapper[3];
            $contact = $indexknapper[4];  
       
        ?>
		
        <div id="mainContainer">

            
                <div id="heading"><a>Westerdals<b>Vulkan</b></a></div>

                <a href="food.php" class = menucircle id = food>
                    <p class = "menutext" id = "menutext1">
                    <img src="img/icons/food.png" alt="icons"><br><?= $food['Kategori'] ?></p>
                </a>

                <a href="transport.php" class = menucircle id = transport>
                    <p class = "menutext" id = "menutext2">
                    <img src="img/icons/transport.png" alt="icons"><br><?= $transport['Kategori'] ?></p>
                </a>

                <a href="shop.php" class = menucircle id = shopping>
                    <p class = "menutext" id = "menutext3">
                    <img src="img/icons/shopping.png" ?alt="icons"><br> <?= $shopping['Kategori'] ?></p>
                </a>

                <a href="activities.php" class = menucircle id = activities>
                    <p class = "menutext" id = "menutext4">
                    <img src="img/icons/activities.png" alt="icons"><br> <?= $activities['Kategori'] ?></p>
                </a>

                <a href="contact.php" class = menucircle id = contact>
                    <p class = "menutext" id = "menutext5">
                    <img src="img/icons/contact.png" alt="icons"><br><?= $contact['Kategori'] ?></p>
                </a>  
                <!-- End of main navbar -->

        </div>
		    <!-- End of container -->
		
		<!-- <div>Icons made by <a href="http://www.flaticon.com/authors/madebyoliver" title="Madebyoliver">Madebyoliver</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
	</body>
</html>
