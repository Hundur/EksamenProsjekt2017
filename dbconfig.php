<?php 

define("host", "localhost");
define("user", "root");
define("pass", "root");
define("dbName", "webproject");
$connection = mysqli_connect(host, user, pass, dbName) or die("Some error occurred during connection " . mysqli_error($con));
mysqli_set_charset($connection,"utf8");

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>