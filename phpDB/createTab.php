<?php
$s = "localhost";
$u = "root";
$pass= "321";
$db = "phpdb";

$conn = new mysqli($s, $u, $pass, $db);

if($conn -> connect_error) {
    die("Connection failed : " . $conn -> connect_error);
}

$sql= "CREATE TABLE MyGuests (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstName VARCHAR(30) NOT NULL,
lastName VARCHAR(30) NOT NULL,
email VARCHAR(20),
regDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if($conn -> query($sql) === true) {
    echo "<p>Table MyGuests created successfully</p>";
} else {
    echo "<p>Error in creating table" . $conn -> error . "</p>";
}

$conn -> close();
?>