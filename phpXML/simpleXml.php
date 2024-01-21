<!DOCTYPE html>
<html>
    <head>
        <title>Simple XML Parser</title>
    </head>
    <body>
        <?php 
        $myXmlData = 
        "<?xml version='1.0' encoding='UTF-8'?>
        <note>
        <to>Goku</to>
        <from>Vegeta</from>
        <heading>Reminder</heading>
        <body>I won't tolerate failure!</body>
        </note>";

        $xml = simplexml_load_string($myXmlData) or die("Error : Connat create object");
        print_r($xml);
        ?>
    </body>
</html>