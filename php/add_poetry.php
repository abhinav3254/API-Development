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


?>