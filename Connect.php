<?php
$user = 'root';
$pass = '';
$db = 'eksamensdatabase';
$con = mysqli_connect('localhost',$user,$pass);
if($con == false){
    echo ('Error in connection');

}
$dbcon = mysqli_select_db($con, $db);




/*if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
echo "Connected successfully";
*/
?> 
