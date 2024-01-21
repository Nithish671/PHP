<!DOCTYPE html>
<html>
    <head>
        <title>Simple XML Parser</title>
    </head>
    <body>
        <?php
        libxml_use_internal_errors(true);
        $myXmlData = "<?xml version='1.0' encoding='UTF-8'?>
        <document>
        <user>Satoru Gojo</wuser>
        <email>satorugojo@jjk.com</wemail>
        </document>";

        $xml = simplexml_load_string($myXmlData);

        if($xml == false) {
            echo "<P>Failed loading XML</p>";
            foreach(libxml_get_errors() as $error) {
                echo "<p>" . $error->message . "</p>";
            }
        } else {
            print_r($xml);
        }
        ?>
    </body>
</html>