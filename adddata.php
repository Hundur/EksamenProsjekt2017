<?php
require 'dbconfig.php';

$name = $area = $city = $type = $description = '';
$lat = $lng = 0.0;

$name = $_POST['name'];
$area = $_POST['area'];
$city = $_POST['city'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$type = $_POST['type'];
$description = $_POST['description'];

test_input($name);
test_input($area);
test_input($city);
test_input($lat);
test_input($lng);
test_input($type);
test_input($description);

$query = "INSERT INTO markers VALUE ('', '". $name ."', '". $area ."', '". $city ."', '". $lat ."', '". $lng ."', '". $type ."','". $description ."')";
$result = mysqli_query($connection, $query);

header("Content-type: application/json");

$callback = $name ."<br>". $area ."<br>". $city . "<br>" . $lat . "<br>". $lng ."<br>". $type . "<br>". $$description; 

if (!$result) {
    echo 'Kunne ikke legge til';
}else{
    $jsonwrite = array(
        'name' => $name,
        'area' => $area,
        'city' => $city,
        'lat' => $lat,
        'lng' => $lng,
        'type' => $type,
        'description' => $description
    );
    addtojson("marker.json", jsonwrite);
    echo $callback;
}

function addtojson($filename, $event){
    $handle = @fopen($filename, 'r+');

    if ($handle === null){
        $handle = fopen($filename, 'w+');
    }

    if ($handle){
        fseek($handle, 0, SEEK_END);

        if (ftell($handle) > 0){
            fseek($handle, -1, SEEK_END);

            fwrite($handle, ',', 1);

            fwrite($handle, json_encode($event) . ']');
        }
        else{

            fwrite($handle, json_encode(array($event)));
        }

    // close the handle on the file
    fclose($handle);
    }
}
?>