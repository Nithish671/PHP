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

    $sql = "UPDATE MyGuests SET firstName = 'Vinsmoke' WHERE id=3";

    if($conn -> query($sql) == true) {
        echo "<p>Records updated successfully...</p>";
    } else {
        echo "<p>Error updating record : " . $conn -> error . "<p>";
    }

    $conn -> close();
    ?>
    </body>
</html>