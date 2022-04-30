<?php

// ******************Making a connection **************************

// creating a variable
$servername = "localhost";
// servername is variable name
$username = "root";
$password = "";
$db = "poetrydb";

$conn = new mysqli($servername,$username,$password,$db);

if($conn -> connect_error) {
    die("connection failed: ".$conn -> connect_error);
}


// ***********************Making a request **********************

$POETRY = $_POST['poetry'];

// POETRY is the variable name 
// $_POST is the method name

$POET_NAME = $_POST['poet_name'];


// ***********************Making Request **************************

$query = "INSERT INTO poetry(poetry_data,poet_name) VALUES('$POETRY','$POET_NAME')";

$result = $conn -> query($query);

if($result == 1) {
    $responce = array("status" => "1","message" => "poetry succesfully inserted");
} else {
    $responce = array("status" => "0","message" => "poetry not succesfully inserted");
}

// In php we use echo to print anything

echo json_encode($responce);


?>