<?php
 
$servername = "jdbc:mysql://localhost:3306";
$username = "root";
$password = "root";
$dbname = "systemae";
 
// Create connection
$conn = new mysqli($servername,
    $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}
 
$sqlquery = "INSERT INTO table VALUES
    ('John', 'Doe', 'john@example.com')"
 
if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}