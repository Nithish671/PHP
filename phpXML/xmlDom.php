<!DOCTYPE html>
<html>
    <head>
        <title>XML DOM</title>
    </head>
    <body>
        <?php
        $xmlDoc = new DOMDocument();
        $xmlDoc -> load("note.xml");

        print $xmlDoc -> saveXML();

        $x = $xmlDoc -> documentElement;
        echo"<br>";

        foreach($x -> childNodes AS $item) {
            print $item -> nodeName . " - " . $item -> nodeValue . "<br>";
        }
        ?>
        </body>
    </html>