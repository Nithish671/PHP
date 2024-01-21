<!DOCTYPE html>
<html>
    <head>
        <title>Simple XML Parser Get</title>
    </head>
    <body>
        <?php
        $xml = simplexml_load_file("note.xml") or die("Error : Cannot create object!");
        echo "<p>" . $xml -> to . "</p>";
        echo "<p>" . $xml -> from . "</p>";
        echo "<p>" . $xml -> heading . "</p>";
        echo "<p>" . $xml -> body . "</p>";
        ?>
        </body>
    </html>