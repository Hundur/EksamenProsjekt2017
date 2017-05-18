<?php

$user = 'root';
$pass = '';
$db = 'eksamensdatabase';
$con = mysql_connect('localhost', $user, $pass);
$db = mysql_select_db('eksamensdatabase');

if($con){
    echo 'Sucessfully Connected to the database';
} else {
    die('Error');
}
?>
