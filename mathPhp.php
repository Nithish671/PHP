<!DOCTYPE html>
<html>
    <body>
        <h1>My First PHP page</h1>
        <?php
        define("cars", ["BMW", "Audi", "Ford"]);
        echo cars[1] . "<br>";

        

        #define("GreeTinG", "Hello Guys!", true);
        define("Greeting", "Hello world!");
        echo Greeting . "<br>";
        //echo greeting . "<br>";
        myFunc();

        function myFunc() {
            echo Greeting . "<br>";
        }

        echo rand() . "<br>";
        echo rand(1 ,10) . "<br>";


        echo round(0.50) . "<br>";
        echo round(1.40) . "<br>";
        echo round(-4.50) . "<br>";
        echo round(-4.40) . "<br>";
 

        echo pi() . "<br>";
        echo min(0, 23, 1, 234, -5, -10) . "<br>";
        echo max(0, -24, 23, 145, 25, 6) . "<br>";
        echo abs(-256) . "<br>";
        echo sqrt(64) . "<br>";
        echo sqrt(1) . "<br>";
        echo sqrt(0) . "<br>";
        echo sqrt(9) . "<br>";
        ?>
        </body>
    </html>