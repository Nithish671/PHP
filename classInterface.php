<!DOCTYPE html>
<html>
    <head>
        <title>Php Practice</title>
    </head>
    <body>
        <h1>My First PHP page</h1>
        <?php
        class pi {
            public static $value = 3.14;
            public  function staticValue() {
                return self::$value;
            }
        }

        class x extends pi {
            public function xPi() {
                return parent::$value;
            }
        }

        $xpi = new x();
        echo "<p>" . $xpi -> xPi() . "</p>";



        $pi = new pi();
        echo "<p>" . $pi -> staticValue() . "</p>";

        echo "<p>" . pi::$value . "</p>";


        class ClassName {
            public static $staticProp = "Itachi";
        }

        echo "<p>" . ClassName::$staticProp . "</p>";

        class domain {
            protected static function getDomain() {
                return "Infinite Void";
            }
        }

        class domainSG extends domain {
            public $dName;
            public function __construct() {
                $this -> dName = parent::getDomain();
            }
        }

        $sg = new domainSG();
        echo "<p>" . $sg -> dName . "</p>";


        class A {
            public static function wel() {
                echo "<p>Hello World!</p>";
            }
        }

        class B {
            public function message() {
                A::wel();
            }
        }

        $objWe = new B();
        $objWe -> message(); 


        class greeting1 {
            public static function welcome1() {
                echo "<p>Hello World!</p>";
            }

            public function __construct() {
                self::welcome1();
            }
        }

        $objWel = new greeting1();

        class greeting {
            public static function welcome() {
                echo "<p>" . "Hello World!" . "</p>";
            }
        }

        greeting::welcome();



        trait message1 {
            public function msg1() {
                echo "<p>" . "Coding is fun" . "</p>";
            }
        }

        trait message2 {
            public function msg2($name = "PHP") {
                echo "<p>" . "{$name} is fun" . "</p>";
            }
        }

        class Wel {
            use message1;
        }

        class Wel1 {
            use message1, message2;
        }

        $obj1 = new Wel();
        $obj2 = new Wel1();

        $obj1 -> msg1();
        $obj2 -> msg1();
        $obj2 -> msg2("Java");
        $obj2 -> msg2();




        trait message {
            public function msg() {
                echo "<p>" . "OOP is fun" . "</p>";
            }
        }

        class Welcome {
            use message;
        }

        $obj = new Welcome();
        $obj -> msg();


        interface Animal {
            public function makeSound();
        }

        class Dog implements Animal {
            public function makeSound() {
                echo "<p>" . "Bow bow" . "</p>";
            }
        }

        class Cat implements Animal {
            public function makeSound() {
                echo "<p>" . "Meow meow" . "</p>";
            }
        }

        class Mouse implements Animal {
            public function makeSound() {
                echo "<p>" . "Squeak" . "</p>";
            }
        }

        $animal1 = new Cat();
        $animal2 = new Mouse();

        $animal1 -> makeSound();
        $animal2 -> makeSound();

        $animal = new Dog();
        $animal -> makeSound();

        $animals = array($animal, $animal1, $animal2);

        forEach($animals as $ani) {
            $ani -> makeSound();
        }


        ?>
        </body>
    </html>