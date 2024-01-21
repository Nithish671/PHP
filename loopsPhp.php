<!DOCTYPE html>
<html>
    <body>
        <h1>My First PHP page</h1>
        <?php
        $x = 0;

        while($x <= 10) {
            if($x == 4) {
                $x++;
                continue;
            }
            echo $x . "<br>";
            $x++;
        }

        echo "<br>";

        $x = 0;
        while($x <= 10) {
            if($x == 4) {
                break;
            }
            echo $x ."<br>";
            $x++;
        } 
            

        echo "<br>";

        for($x = 0; $x <= 10; $x++) {
            if($x == 3) {
                continue;
            }
            echo $x . "<br>";
        }

        echo "<br>";

        for($x = 0; $x <= 10; $x++) {
            if($x == 4) {
                break;
            }
            echo $x . "<br>";
        }

        $name = array("Roronoa" => "Zoro", "Uchiha" => "Itachi", "Gojo" => "Satoru", "Yuji" => "Itadori");
        foreach($name as $k => $val) {
            echo "$k $val<br>";
        }
        echo "<br>";

        $colors = array("black", "blue", "red", "green");
        foreach ($colors as $val) {
            echo $val . "<br>";
        }
        echo "<br>";

        for($x = 0; $x <= 125; $x+=25) {
            echo $x . "<br>";
        }

        echo "<br>";


        for($x = 0; $x <= 5; $x++) {
            echo $x . "<br>";
        }

        echo "<br>";


        $x = 6;
        do {
            echo $x . "<br>";
            $x++;
        } while($x < 5);


        $x = 0;
        while($x <= 5) {
            echo "The number is $x <br>";
            $x++;
        }

        $y = 0;
        while($y <= 100) {
            echo $y . "<br>";
            $y+=5;
        }
        ?>
        </body>
    </html>