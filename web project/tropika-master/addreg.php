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

// Retrieve form data
$name = $_POST['name'];
$mobileNo = $_POST['mobileNo'];
$address = $_POST['address'];
$email = $_POST['email'];

// SQL query to insert data into the database
$sql = "INSERT INTO register (name, mobile_no, address, email) VALUES ('$name', '$mobileNo', '$address', '$email')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
   // header("Location: index.html");
    //exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
