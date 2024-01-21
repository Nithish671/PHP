<!DOCTYPE html>
<html>
    <head>
        <title>Php Practice</title>
    </head>
    <body>
    <?php
    $myFile = fopen("txtDemo.txt", "a") or die("Unable to open file!");
    fwrite($myFile, "Vegeta\n");
    fwrite($myFile, "Goten\n");
    fclose($myFile);
    ?>
    </body>
</html>