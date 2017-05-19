<html>
    <head>
        <meta charset="utf">
        <title>Get Data</title>
    </head>
    <body>
        
        <?php
        
        require 'Connect.php';
        
        $sql = "SELECT * FROM `lokasjoner` ORDER BY `ID` ASC";
        $records = mysql_query($sql);
        $name = 'Navn';
        $price = 'Pris';
        while ($sql = $records->fetch_assoc()){
        echo 'Name: ' . $rows[$name] . '<br/>' . 'Pris: ' . $rows[$price] ;}
        ?>
    </body>
    
</html>