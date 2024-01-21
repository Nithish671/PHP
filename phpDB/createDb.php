<?php
$sName = "localhost";
$uName = "root";
$pass = "321";

$conn = new mysqli($sName, $uName, $pass);

if($conn->connect_error) {
    die("Connection failed " . $conn -> connect_error);
}

$sql = "CREATE DATABASE phpDb";

if($conn->query($sql) === true) {
    echo "<p>Database created successfully</p>";
} else {
    echo "<p>Eroor in creating database</p>";
}

$conn -> close();
?>