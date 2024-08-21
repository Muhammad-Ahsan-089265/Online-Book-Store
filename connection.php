<?php

// Database connection details
$host = "localhost";        // Database host
$username = "root";         // Database username
$password = "089265";       // Database password
$dbname = "online_book_store_db";  // Database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);  // Establish a new MySQLi connection

// Check connection
if ($conn->connect_error) {  // If there is a connection error
    die("Connection failed: " . $conn->connect_error);  // Terminate the script and output the error message
} 
// else 
// {
//     echo "Connection successful!";
// }

// Close the connection
// $conn->close();
?>



