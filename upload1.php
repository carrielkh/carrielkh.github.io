<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'forms1';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$value1 = $_POST['email'];
$value2 = $_POST['password'];
$value3 = $_POST['passwordagain'];

$sql = "INSERT INTO upload1 (email, password, passwordagain)
VALUES ('$value1', '$value2', '$value3')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>