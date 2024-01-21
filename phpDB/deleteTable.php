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

    $sql = "DELETE FROM MyGuests WHERE id = 7";

    if($conn -> query($sql) == TRUE) {
        echo "<p>Record deleted successfully...</p>";
    } else {
        echo "<p>Error deleting record : " . $conn -> error . "</p>";
    }
    ?>
    </body>
</html>