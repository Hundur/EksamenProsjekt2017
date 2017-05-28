<?php
$user = 'root';
$pass = '';
$db = 'eksamensdatabase';
$con = mysqli_connect('localhost',$user,$pass);
if($con == false){
    echo ('Error in connection');

}
$dbcon = mysqli_select_db($con, $db);

mysqli_set_charset($con,"UTF8");

