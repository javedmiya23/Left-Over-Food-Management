<?php
// Database connection details
$host = "localhost";
$user = "root";
$password = "";
$database = "ipl_db";

// Create a connection to the database
$conn = new mysqli($host, $user, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user inputs from the form
$name = $_POST['name'];
$email = $_POST['email'];

// SQL query to check if the provided name and email exist
$sql = "SELECT * FROM register WHERE name = '$name' AND email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User exists in the database
    echo "Login successful!";
} else {
    // User not found
    echo "Invalid name or email. Please try again.";
}

// Close the database connection
$conn->close();
?>
