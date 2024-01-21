<?php
$s = "localhost";
$u = "root";
$p = "321";
$db = "phpdb";

$conn = new mysqli($s, $u, $p, $db);

if($conn -> connect_error) {
    die("Connection failed : " . $conn -> connect_error);
}

$stmt = $conn -> prepare("INSERT INTO MyGuests (firstName, lastName, email) VALUES (?, ?, ?)");
$stmt -> bind_param("sss", $firstName, $lastName, $email);

$firstName = "Monkey D.";
$lastName = "Luffy";
$email = "luffy@op.com";
$stmt -> execute();

$firstName = "Yuji";
$lastName = "Itadori";
$email = "yuji@jjk.com";
$stmt -> execute();

echo "<p>New records inserted successfully</p>";

$stmt -> close();
$conn -> close();
?>