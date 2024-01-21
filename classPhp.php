<!DOCTYPE html>
<html>
    <head>
        <title>Php Practice</title>
    </head>
    <body>
        <h1>My First PHP page</h1>
        <?php
        class Uchiha {
            public $name;
            public $age;
            public $eye;

            function setName($n) {
                $this -> name = $n;
            }

            protected function setAge($a) {
                $this -> age = $a;
            }

            private function setEye($e) {
                $this -> eye = $e;
            } 
        }

        $itachi = new Uchiha();

        $itachi -> setName("Itachi Uchiha");
        /* $itachi -> setEye("Sharingan");
        $itachi -> setAge(20); */


        class Gojo {
            public $name;
            protected $hair;
            private $eye;
        }
        $sg = new Gojo();
        $sg -> name = "Satoru Gojo";
        /* $sg -> hair = "White";
        $sg -> eye = "Six-Eyes"; */


        class Anime {
            public $fName;
            public $lName;

            function __construct($fName, $lName) {
                $this -> fName = $fName;
                $this -> lName = $lName;
            }
            
            function __destruct() {
                echo "<p>The anime character is {$this -> fName} {$this -> lName}.</p>";
            }
        }

        $zoro = new Anime("Roronoa", "Zoro");


        class Car {
            public $name;
            public $color;

            public function __construct($name, $color) {
                $this -> name = $name;
                $this -> color = $color;
            }
        }
        $rr = new Car("Rolce Royce", "White");

        echo "<p>I have " . $rr -> color . " color " . $rr -> name ." car</p>";




        /* $bmw = new Car();

        $bmw -> name = "BMW";
        echo "<p>" . $bmw -> name . "<p>";
        echo "<br>";

        var_dump($bmw instanceof Car);
        echo "<br>"; */



        class Fruit {
            public $name;
            public $color;

            function set_name($name) {
                $this->name = $name;
            }

            function get_name() {
                return $this->name;
            }

            function set_color($color) {
                $this -> color = $color;
            }
            function get_color() {
                return $this -> color;
            }
        }

        $apple = new Fruit();
        $orange = new Fruit();

        $apple -> set_name("Apple");
        $orange -> set_name("Orange");

        echo "<p>" . $apple -> get_name() . "</p>";
        echo "<p>" . $orange -> get_name() . "</p>";
        $apple -> set_color("Red");

        echo "<p>Name : " . $apple -> get_name() . ", Color : " . $apple -> get_color() . "</p>";
        ?>
        </body>
    </html>