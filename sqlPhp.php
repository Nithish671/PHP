<!-- procedural -->
<?php 
$sName = "localhost";
$uName = "root";
$pass = "321";

$conn = mysqli_connect($sName, $uName, $pass);

if(!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}

echo "Connected successfully";

mysqli_close($conn);
?>




<!-- Object -->
<!-- <?php 
$serverName = "localhost";
$userName = "root";
$password = "321";

$conn = new mysqli($serverName, $userName, $password);

if(mysqli_connect_error()) {
    die("connection failed : " . mysqli_connect_error());
}

echo "Connected Successfully";
$conn->close();
?> -->