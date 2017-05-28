<html>

    <head>
        <meta charset="UTF-8">
        <title>Get-Data</title>
    </head>
    <body>
           <?php
        
        require 'Connect.php' ;
        
        $query = mysqli_query($con, "SELECT * FROM lokasjoner ORDER BY ID ASC" );
        if(!$query){
            echo ('Error in Query');
        }
        $id = 'ID';
        $name = 'Navn';
        $price = 'Pris';
        $distance = 'Avstand';
        $open = 'Open';
        $close = 'Stengetid' ;
        $desc = 'Beskrivelse';
        while($rows = mysqli_fetch_array($query)){
             echo '<br/>' . 'Navn: ' . $rows[$name] . '<br/>' . 'Pris: ' . $rows[$price] . '<br/>' .
                  'Avstand ' . $rows[$distance] . '<br/>' . 'Åpningstid: ' . $rows[$open] . '<br/>' .
                  'Stengetid: ' . $rows[$close] . '<br/>' . 'Beskrivelse: ' . $rows[$desc];
        };
        ?>
    </body>


</html>