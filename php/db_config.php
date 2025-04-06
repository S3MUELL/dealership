<?php 
$servername = "localhost" ;
$username = "root";
$password = "";
$database = "cars_list";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connection_error);
};
?>