<?php 
$servername = "localhost" ;
$username = "root";
$password = "";
$database = "cars_list";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connection_error) {
    die("Connection failed:" . $conn->connect_error);
};
?>