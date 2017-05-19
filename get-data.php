<html>

    <head>
        <meta charset="UTF-8">
        <title>Get-Data</title>
    </head>
    <body>
           <?php
        
        require 'Connect.php' ;
        $query = "SELECT * FROM `lokasjoner` ORDER BY `ID` ASC";
        $id = 'ID';
        $name = 'Navn';
        $price = 'Pris';
        $distance = 'Avstand';
        $open = 'Åpningstid';
        $close = 'Stengetid' ;
        $desc = 'Beskrivelse';
        
        while($rows = mysql_fetch_assoc($query)){
             echo 'Navn: ' . $rows[$name] . '<br/>' . 'Pris: ' . $rows[$price] . 
                  'Avstand ' . $rows[$distance] . '<br/>' . 'Åpningstid: ' . $rows[$open] . 
                  'Stengetid: ' . $rows[$close] . '<br/>' . 'Beskrivelse: ' . $rows[$desc];
        };
        ?>
    </body>


</html>