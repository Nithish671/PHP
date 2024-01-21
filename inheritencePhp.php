<!DOCTYPE html>
<html>
    <head>
        <title>Php Practice</title>
    </head>
    <body>
        <h1>My First PHP page</h1>
        <?php
        class Fruit {
            public $name;
            public $color;

            public function __construct($name, $color) {
                $this->name = $name;
                $this->color = $color;
            }

            function intro() {
                echo "<p>The fruit is {$this->name} and the color is {$this->color}.</p>";
            }
        }

        class Strawberry extends Fruit {
            public $weight;

            public function __construct($name, $color, $weight) {
                $this -> name = $name;
                $this -> color = $color;
                $this -> weight = $weight;
            }

            public function intro() {
                echo "<p>The fruit is {$this->name}, the color is {$this->color} and the weight is {$this->weight} kilograms.</p>";
            }
        }

        $strawberry = new Strawberry("Strawberry", "red", 50);
        $strawberry -> intro();
        ?>
        </body>
    </html>