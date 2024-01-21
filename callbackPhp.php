<!DOCTYPE html>
<html>
    <head>
        <title>Php Practice</title>
    </head>
    <body>
        <h1>My First PHP page</h1>
        <?php
        function exclaim($str) {
            return $str . "!";
        }

        function ask($str) {
            return $str . "?";
        }

        function printFormatted($str, $format) {
            echo "<p>". $format($str) ."</p>";
        }

        printFormatted("Hi", "exclaim");
        printFormatted("How are you", "ask");

        
        echo "<br>";
        function myCallback($item) {
            return strlen($item);
        }

        $strings = ["apple", "orange", "banana", "coconut"];
        $lengths = array_map("myCallback", $strings);

        $lengthAno = array_map(function ($item) { return strlen($item); }, $strings);
        
        print_r($lengthAno);
        echo "<br>";
        print_r($lengths);
        ?>
        </body>
    </html>