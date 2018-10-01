<?php

session_start();

require_once 'function.php';
/////////////////////////////////////////////////////////////////////////////////

// MySql 

$servername = "localhost";
$username = "root";
$password = "";
$db = "ievakle";

// Create connection
$con = mysqli_connect($servername, $username, $password, $db);

var_dump ($con);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
    echo "Connected successfully"
?>





