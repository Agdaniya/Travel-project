<?php
// Retrieve form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$dateofbirth = $_POST['dateofbirth'];
$password = $_POST['password'];

// Connect to the database
$servername = "localhost"; 
$username = "sqluser"; 
$password = "password";
$dbname = "travel"; 

$conn = new mysqli($localhost, $sqluser, $password, $travel);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert the form data into the database
$sql = "INSERT INTO userprofile (firstname,lastname,email,dateofbirth,password) VALUES ('$firstname','$lastname' ,'$email','$dateofbirth','$password')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>