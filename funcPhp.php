<!DOCTYPE html>
<html>
    <body>
        <h1>My First PHP page</h1>
        <?php #declare(strict_types= 1);
        function add_six(&$val) {
            $val += 6;
        }

        $num = 25;
        add_six($num);
        echo $num . "<br>";


        function divNum(float $x, float $y) : int {
            return (int)($x / $y);
        }

        echo divNum(5, 2) . "<br>";


        function addNum(float $x, float $y) : float{
            return $x / $y;
        }

        echo addNum(5, 2) . "<br>";



        function sum(int $x, int $y) {
            $z = $x + $y;
            return $z;
        }
        
        echo "25 + 6 = " . sum(25, 6) . "<br>";
        echo "10 + 11 = " . sum(10, 11) . "<br>";


        function setheight(int $height = 25) {
            echo "Height : $height<br>";
        }

        setHeight(10);
        setHeight();


        function addNumbers(int $a, int $b) {
            return $a + $b;
        }
        #echo addNumbers(5, "5 days") . "<br>";
        echo addNumbers(6, 25) . "<br>";


        function famName($fName, $age) {
            echo "$fName Uchiha is $age years old!<br>";
        }

        famName("Madara", 30);

        function firstName($fName) {
            echo "$fName Uchiha<br>";
        }

        firstName("Itachi");

        firstName("Sasuke");


        function writeMsg() {
            echo "Hello world<br>";
        }

        writemsg();
        writeMsg();
        ?>
        </body>
    </html>