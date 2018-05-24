<?php

$servername = "localhost";
$username = "root";
$password = "root";
$db_name = "default";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo "<hr>";

// Test Database Read
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. "<br>";
    }
} else {
    echo "0 results";
}
echo "<hr>";

// Close Connection
$conn->close();
