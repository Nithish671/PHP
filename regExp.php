<!DOCTYPE html>
<html>
    <body>
        <h1>My First PHP page</h1>
        <?php
        $str = "Apples and bananas.";
        $pattern = "/ba(na){2}/i";
        echo preg_match($pattern, $str) . "<br>";


        $str = "Visit India!";
        $pattern = "/india/i";
        echo preg_replace($pattern, "Japan", $str) . "<br>";


        $str = "The rain in SPAIN falls mainly on the plains.";
        $pattern = "/ain/i";
        echo preg_match_all($pattern, $str) . "<br>";



        $str = "Visit East Blue";
        $pattern = "/east/i";
        echo preg_match($pattern, $str) . "<br>";
        ?>
        </body>
    </html>