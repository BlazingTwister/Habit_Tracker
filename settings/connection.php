<?php

// Database connection parameters
$host = "localhost";
$user = "id22037552_blaze";
$password = "Htrack@f5";
$database = "id22037552_habittracker";

// MySQLi connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//echo "Connected successfully";

?>