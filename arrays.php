<!DOCTYPE html>
<html>
    <body>
        <h1>My First PHP page</h1>
        <?php
        $age = array("Gojo" => "25", "Luffy" => "20", "Zoro" => "23");
        asort($age);

        foreach($age as $k => $v) {
            echo "<p>Name : " . $k . ", Age : " . $v . ".</p>";
        }

        ksort($age);
        foreach($age as $k => $v) {
            echo "<p>Name : " . $k . ", Age : " . $v . ".</p>";
        }

        arsort($age);
        foreach($age as $k => $v) {
            echo "<p>Name : " . $k . ", Age : " . $v . ".</p>";
        }

        krsort($age);
        foreach($age as $k => $v) {
            echo "<p>Name : " . $k . ", Age : " . $v . ".</p>";
        }


        $cars = array("Volvo", "BMW", "Toyota");
        sort($cars);
        $num = array(1, 24, 2, 21, 25, 3, 6);
        rsort($num);
        $numLen = count($num);

        for($x = 0; $x < $numLen; $x++) {
            echo "<p>" . $num[$x] . "</p>";
        }

        

        for($x = 0; $x < 3; $x++) {
            echo "<p>" . $cars[$x] . "</p>";
        }



        $cars = array(
            array("Volvo", 22, 18),
            array("BMW", 15, 13),
            array("Toyota", 25, 10),
            array("Audi", 11, 6)
        );

        for($row = 0; $row < 3; $row++) {
            echo "<p>Row Number : $row</p>";
            echo "<ul>";
            for($col = 0; $col < 3; $col++) {
                echo "<li>" . $cars[$row][$col]. "</li>";
            }
            echo "</ul>";
        }
        echo "<br>";
        $c = 0;

        for($r = 0; $r < 3; $r++) {
            echo "<p>Car : " . $cars[$r][0] . ", Stock : " . $cars[$r][1] . ", Sold : " . $cars[$r][2] . ".</p>";
        }

        echo "<br>";

        echo $cars[0][0] . " : In Stock : " . $cars[0][1] . ", Sold : " . $cars[0][2] . ".<br>";
        echo $cars[1][0] . " : In Stock : " . $cars[1][1] . ", Sold : " . $cars[0][2] . ".<br>";


        echo "<br>";
        $age["Itachi"] = 20;
        $age["Satoru"] = 25;
        $age["Ryomen"] = 2000;

        echo "Ryomen is ". $age["Ryomen"] . " years old...<br>";

        foreach($age as $k => $v) {
            echo "Name : " . $k . ", Age : " . $v . "<br>";
        }


        echo "<br>";


        $cars = array("BMW", "Audi", "Toyota");
        $arrLength = count($cars);
        for($i = 0; $i < $arrLength; $i++) {
            echo $cars[$i] . "<br>";
        } 


        echo "<br>";
        echo "I like $cars[0], $cars[1] and $cars[2].<br>";
        echo "I like ". $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br>";
        echo count($cars) . "<br>";
        ?>
        </body>
    </html>