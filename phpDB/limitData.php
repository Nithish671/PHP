<!DOCTYPE html>
<html>
    <head>
        <title>Php Database</title>
    </head>
    <body>
    <?php
    $s = "localhost";
    $u = "root";
    $p = "321";
    $db = "phpdb";

    $conn = new mysqli($s, $u, $p, $db);

    if($conn -> connect_error) {
        die("Connection Failed : " . $conn -> connect_error);
    }

    $sql = "SELECT * FROM MyGuests LIMIT 2, 5";

    $result = $conn -> query($sql);

    if($result -> num_rows > 0) {
        while($row = $result -> fetch_assoc()) {
            echo "<p>Id : " . $row["id"] . " . " . $row["firstName"] . " " . $row["lastName"] . "</p>";
        }
    }

    $conn -> close();
    ?>
    </body>
</html>