<?php 
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Php Practice</title>
    </head>
    <body>
        <h1>My First PHP page</h1>
        <?php
        $_SESSION["favChar"] = "Goku";

        #session_unset();
        #session_destroy();

        echo "<p1>The favourite color is " . $_SESSION["favColor"] . "</p>";
        echo "<p1>The favourite anime is " . $_SESSION["favAnime"] . "</p";
        echo "<br><br>";
        print_r($_SESSION);
        ?>
        </body>
    </html>