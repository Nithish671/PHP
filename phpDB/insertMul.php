<?php
$s = "localhost";
$u = "root";
$p = "321";
$db = "phpdb";

$conn = new mysqli($s, $u, $p, $db);

if($conn -> connect_error) {
    die("Connection failed : " . $conn -> connect_error);
}

$sql = "INSERT INTO MyGuests (firstName, lastName, email) VALUES ('Vinsmoke', 'Sanji', 'sanji@op.com');";

$sql .= "INSERT INTO MyGuests (firstName, lastName, email) VALUES ('Rorornoa', 'Zoro', 'zoro@op.com');";

$sql .= "INSERT INTO MyGuests (firstName, lastName, email) VALUES ('Go D.', 'Ussopp', 'ussopp@op.com')";

if($conn -> multi_query($sql) === true) {
    echo "<p>New records set successfully</p>";
} else {
    echo "<p>Error : " . $sql . "<br>" . $conn -> error . "</p>";
}

$conn -> close();
?>