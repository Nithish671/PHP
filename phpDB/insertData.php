<?php
$s = "localhost";
$u = "root";
$pass = "321";
$db = "phpdb";

$conn = new mysqli($s, $u, $pass, $db);

if($conn -> connect_error) {
    die("Connection failed : " . $conn -> connect_error);
}

$sql = "INSERT INTO MyGuests (firstName, lastName, email) VALUES ('Itachi', 'Uchiha', 'clankiller@leaf.com')";

if($conn -> query($sql)) {
    echo "<p>New record created successfully</p>";
} else {
    echo "<p>Error : " . $sql . "<br>" . $conn -> error . "</p>";
}

$conn -> close();
?>