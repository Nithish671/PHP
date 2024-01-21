<!DOCTYPE html>
<html>
    <body>
        <h1>My First PHP page</h1>
        <?php
        $x = 25.10;
        $intCast = (int)$x;
        echo $intCast . "<br>";

        $x = "25.10";
        $intCast = (int)$x;
        echo $intCast . "<br>";



        $x = 25;
        var_dump(is_numeric($x));
        echo "<br>";

        $x = 25.10;
        var_dump(is_numeric($x));
        echo "<br>";

        $x = "25";
        var_dump(is_numeric($x));
        echo "<br>";

        $x = "25.10" + 6;
        var_dump(is_numeric($x));
        echo "<br>";

        $x = "Hello";
        var_dump(is_numeric($x));
        echo "<br>";

        echo "<br>" . "end" . "<br>";


        $x = acos(8);
        var_dump($x);
        echo "<br>";
        var_dump(is_nan($x));
        echo "<br>";


        $x = 1.9e411;
        var_dump(is_infinite($x));
        echo "<br>";
        var_dump($x);
        echo "<br>";
        $y = 10;
        var_dump(is_finite($y));
        echo "<br>";



        $x = 25.10;
        var_dump(is_float($x));
        echo "<br>";
        var_dump(is_double($x));
        echo "<br>";

        $x = 10;
        var_dump(is_float($x));
        echo "<br>";



        $x = 25;
        var_dump(is_int($x));
        echo "<br>";
        var_dump(is_integer($x));
        echo "<br>";
        var_dump(is_long($x));
        echo "<br>";
        echo PHP_INT_MAX . "<br>";

        $x = 25.10;
        var_dump(is_int($x));
        ?>
        </body>
    </html>