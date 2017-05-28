<?php
    $user = 'root';
    $pass = '';
    $db = 'eksamensdatabase';
    $con = mysqli_connect('localhost',$user,$pass); /* Koden som setter opp fordbindelse til databasen */
    if($con == false) /* Sjekker om du får forbindelse med databasen */
    {
        echo ('Error in connection');
    }
    $dbcon = mysqli_select_db($con, $db); /* Velger databasen */
    mysqli_set_charset($con,"UTF8"); /* Setter all data som blir tatt ut fra databasen til UTF-8 For ÆØÅ */
?>