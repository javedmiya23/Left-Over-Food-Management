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

// Retrieve donation details from the form
$name = $_POST['name'];
$foodType = $_POST['food_type'];
$address = $_POST['address'];
$quantity = $_POST['quqntity'];

// SQL query to insert donation data into the database
$sql = "INSERT INTO donations (name, food_type, address, quqntity) VALUES ('$name', '$food_type', '$address', $quqntity)";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Donation successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
