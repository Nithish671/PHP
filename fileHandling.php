<!DOCTYPE html>
<html>
    <head>
        <title>Php Practice</title>
    </head>
    <body>
    <?php
    $myFile = fopen("webDictionary.txt", "r") or die("Unable to open the file!");
    while(!feof($myFile)) {
        echo fgetc($myFile);
    }

    echo "<br>";
    echo "<br>";
    /* echo fgetc($myFile);
    echo fgetc($myFile);
    echo fgetc($myFile);
    echo fgetc($myFile); */

    $myFile = fopen("webDictionary.txt", "r") or die("Unable to open the file!");
    while(!feof($myFile)) {
        echo fgets($myFile) . "<br>";
    } 


    /* echo fgets($myFile) . "<br>";
    echo fgets($myFile) . "<br>";
    fclose($myFile); */

    /*$myFile = fopen("webDictionary.txt", "r") or die("Unabe to open file!");
    echo fread($myFile, filesize("webDictionary.txt"));
    fclose($myFile);*/


    #echo readfile("webDictionary.txt");
    fclose($myFile);
    ?>
    </body>
</html>