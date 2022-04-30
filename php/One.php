<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poetrydb";

$connection = new mysqli($servername,$username,$password,$dbname);

if(connection -> connect_error) {
    die("Connection Failed:-> ".$connection->connect_error);
}

$POETRY = $_POST['poetry'];
$POET_NAME = $_POST['poet_name'];


$query = "INSERT INTO poetry(poetry_data,poet_name) VALUES ('$POETRY','$POET_NAME')";

$result = $connection ->query($query);

if($result == 1) {
    $response = array("status"=>"1","message"=>"Poetry Successfully Inserted");
} else {
    $response = array("status"=>"0","message"=>"Poetry Failed");
}

echo json_encode($response);

?>