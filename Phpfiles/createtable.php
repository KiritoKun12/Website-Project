<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "peopledata";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
}

$sql = "CREATE TABLE Friends (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) ,
country VARCHAR(30) NOT NULL,gender VARCHAR(10) NOT NULL,
phone VARCHAR(10),email VARCHAR(50),
uname VARCHAR(20),password VARCHAR(12)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Friends created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>