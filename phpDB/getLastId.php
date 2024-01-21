<?php
$s = "localhost";
$u = "root";
$pass = "321";
$db = "phpdb";

$conn = new mysqli($s, $u, $pass, $db);

if($conn -> connect_error) {
    die("Connection failed : " . $conn -> connect_error);
}

$sql = "INSERT INTO MyGuests (firstName, lastName, email) VALUES ('Satoru', 'Gojo', 'satoru@gojo.com')";

if($conn -> query($sql) === true) {
    $last_id = $conn -> insert_id;
    echo "<p>New record created successfully. Last inserted ID is : " . $last_id . "</p>";
} else {
    echo "<p>Error " . $sql . "<br>" . $conn -> error . "</p>";
}

$conn -> close();
?>