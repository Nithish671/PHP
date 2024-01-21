<!DOCTYPE html>
<html>
    <body>
        <?php
        $txt = "Hello world";
        $x = 5;
        $y = 10.5;
        
        echo $txt ."<br>";
        echo $x . "<br>";
        echo $y . "<br>";

        $txt1 = "Satoru Gojo";
        echo "Hello $txt1!<br>";

        echo "Hello " . $txt1 . "!<br>";
        echo $x + $y . "<br>";

        $a = 25;
        $b = 0;

        $c = 2;
        function myFunction() {
            $a = 10;
            global $b, $c;
            $c = $b + $c;
            echo "<p>Variable a inside function is : $a</p>";
            echo "<p>b = $b";
            echo "<p>c = $c";
            echo "<p>y = ". $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'] . "</p>";
        }
        myFunction();
        echo "<p>Variable a outside function is : $a</p>";
        echo "y = $y";

        function myFunc() {
            $x = 25;
            echo "<p>" .$x . "</p>";
            $x++;
        }

        myFunc();
        myFunc();
        myFunc();
        ?>
    </body>
</html>