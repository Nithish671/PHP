<!DOCTYPE html>
<html>
    <head>
        <title>PHP AJAX Database</title>
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table, td, th {
        border: 1px solid black;
        padding: 5px;
    }

    th {text-align: left;}
</style>
<body>
<?php 
$q = intval($_GET['q']);

$conn = new mysqli('localhost', 'root', '321', 'phpdb');

if($conn -> connect_error) {
    die('Could not connect : ' . $conn -> connect_error);
}

$sql = "SELECT * FROM myguests WHERE id = '" . $q ."'";
$result = $conn -> query($sql);

echo "<table>
<tr>
<th>Id</th>
<th>First Name</th>
<th>Last Name</th>
<th>E-Mail</th>
<th>Reg.Date</th>
</tr>";
while($row = $result -> fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['firstName'] . "</td>";
    echo "<td>" . $row['lastName'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['regDate'] . "</td>";
    echo "</tr>";
}
echo "</table>";

$conn -> close();
?>
</body>
</html>