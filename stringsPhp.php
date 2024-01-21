<!DOCTYPE html>
<html>
    <body>
        <h1>My First PHP page</h1>
        <?php
        


        $txt = "Hello World!";
        echo strlen("Hello World!") . "<br>";
        echo str_word_count($txt) . "<br>";
        echo strrev($txt) . "<br>";
        echo strpos($txt, "Wor") . "<br>";
        echo strpos($txt, "Emo") . "<br>";

        echo str_replace("World", "Gojo", $txt);

        ?>
        </body>
    </html>