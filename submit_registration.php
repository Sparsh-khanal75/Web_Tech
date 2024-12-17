<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$host = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password is empty
$database = "isc_database"; // Replace with your database name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

echo "Database connected successfully<br>";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $usn = $_POST['usn'];
    $college_email = $_POST['college_email'];
    $department = $_POST['Department'];
    $semester = $_POST['Sem'];

    // Prepare SQL query
    $sql = "INSERT INTO members (name, usn, college_email, department, semester)
            VALUES ('$name', '$usn', '$college_email', '$department', '$semester')";

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
