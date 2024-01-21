<!DOCTYPE html>
<html>
    <body>
        <h1>My First PHP page</h1>
        <?php
        echo $user1 = $_GET["user"] ?? "anonymous<br>";

        $color = "Blue";
        echo $color = $color . "<br>" ?? "red<br>";


        $status = (empty($user) ? "Anonymous!" : "Logged in!");
        echo $status . "<br>";

        $user = "Itachi";

        echo $status = (empty($user)) ? "Anonymous!<br>" : "Logged in!<br>";



        $x = array("a" => "red", "b" => 5);
        $y = array("c" => "blue", "d" => "yellow");
        $z = array("a" => "red", "b" => "5");

        echo var_dump($x !== $z) . "<br>";

        echo var_dump($x <> $z) . "<br>";

        echo var_dump($x == $z) . "<br>";
        echo var_dump($x === $z) . "<br>";

        print_r($x + $y);
        echo "<br>";


        $txt1 = "Hello";
        $txt2 = " Gojo";
        $txt3 = "Satoru";
        $txt3 .= $txt2;

        echo $txt3 . "<br>";

        echo $txt1 . $txt2 . "<br>";



        $x = 25;
        $y = 6;

        if(!($x == 25 and $y != 10)) {
            echo "True1<br>";
        } else {
            echo "False<br>";
        }

        if($x == 25 || $y != 10) {
            echo "True<br>";
        }

        if($x == 25 && $y != 10) {
            echo "True1<br>";
        }

        if($x == 25 xor $y == 6) {
            echo "True<br>";
        } else {
            echo "False<br>";
        }
 
        if($x == 25 and $y != 10) {
            echo "True1<br>";
        }

        if($x == 25 and $y == 10) {
            echo "True2<br>";
        }

        if($x > $y or $y < $x) {
            echo "True3<br>";
        }



        $x = 25;
        $y = 6;

        echo $x++ . "<br>";
        echo $x . "<br>";
        echo --$y . "<br>";
        echo $y . "<br>";



        $x = 10;
        $y = 1;
        $z = 10;

        echo var_dump($x != $y) . "<br>";
        echo var_dump($x <= $y) . "<br>";
        echo ($x <=> $y) . "<br>";
        echo ($y <=> $x) . "<br>";
        echo ($x <=> $z) . "<br>";




        $x = 10;
        $y = "10";

        echo var_dump($x == $y) . "<br>";
        echo var_dump($x === $y) . "<br>";


        $x = 10;
        $x += 25;
        $y = 6;
        $y -= 11;
        $x %= 6;

        echo $x . "<br>";
        echo $y . "<br>";


        $x = 25;
        $y = 6;

        echo $x / $y . "<br>";
        echo $x % $y . "<br>";
        echo $x ** $y . "<br>";




        $x = 25;
        $y = 6;

        echo $x + $y;

        ?>
        </body>
    </html>