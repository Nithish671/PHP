<!DOCTYPE html>
<html>
    <head>
        <title>Simple XML Parser</title>
    </head>
    <body>
        <?php
        $xml = simplexml_load_file("note.xml") or die("Error : cannot create object");
        print_r($xml);
        ?>
        </body>
    </html>