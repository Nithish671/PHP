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
        $_SESSION["favColor"] = "Blue";
        $_SESSION["favAnime"] = "Dragon Ball";
        $_SESSION["favChar"] = "Zoro";
        echo "Session variables set.";
        ?>
        </body>
    </html>