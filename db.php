<?php
$servername = "localhost";  // MySQL server, usually localhost
$username = "root";         // MySQL username (use root if local server)
$password = "";             // MySQL password (leave empty if default)
$dbname = "isc_database";   // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
