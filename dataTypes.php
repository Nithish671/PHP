<!DOCTYPE html>
<html>
    <body>
        <h1>My First PHP page</h1>
        <?php
        $x = "Hello World";
        var_dump($x);
        echo "<br>";

        $y;
        var_dump($y);
        echo "<br>";

        $x = null;
        var_dump($x);
        echo "<br>";



        class Car {
            public $brand;
            public $model;
            public function __construct($brand, $model) {
                $this->brand = $brand;
                $this->model = $model;
            }
            public function message() {
                return "My car is a " . $this -> brand . " " . $this -> model . "!<br>";
            }
        }

        $myCar = new Car("Ford", "Mustang");
        $myCar1 = new Car("Audi", "A8");
        echo $myCar -> message();
        echo $myCar1 -> message();


        $cars = array("Volvo", "BMW", "Audi");
        var_dump($cars);
        echo "<br>";



        $x = true;
        $y = false;
        var_dump($x);
        echo "<br>";
        echo $y . "<br>";


        $x = 25.10;
        var_dump($x);
        echo "<br>";


        $x = 2510;
        var_dump($x);
        echo "<br>";


        $x = 'Hello World';
        $y = "Hello World";

        echo $x . "<br>";
        echo $y . "<br>";
        ?>
        </body>
    </html>