<!DOCTYPE html>
<html>
    <body>
        <h1>My First PHP page</h1>
        <?php
        $txt2 = "Learn PHP!";
        $txt3 = "Hello";
        $a = 6;
        $b = 11;

        print "<h2>" . $txt2 . "</h2>";
        print "Hi, " . $txt3 . " there!<br>";
        print ($a + $b);


        print "<h2>Php is fun</h2>";
        print "Hello World!<br>";
        print "I'm about to learn php!<br>";


        $txt = "Learn PHP";
        $txt1 = "Hello there";
        $x = 25;
        $y = 10;

        echo "<h2>" . $txt1 . "</h2>";
        echo ("Hi, " . $txt1 . "<br>");
        echo $x + $y , "<br>";
        echo "HI<br>";


        echo "<h2>Php is fun</h2>";
        echo "Hello world<br>";
        echo "I'm about to learn PHP!<br>";
        echo "This ", "String ", "was ", "made ", "with multiple parameters.<br>";
        ?>
        </body>
    </html>