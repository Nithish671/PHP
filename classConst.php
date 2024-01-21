<!DOCTYPE html>
<html>
    <head>
        <title>Php Practice</title>
    </head>
    <body>
        <h1>My First PHP page</h1>
        <?php
        abstract class ParentClass {
            abstract protected function prefixName($name);
        }

        class ChildClass1 extends ParentClass {
            public function prefixName($name, $seperator = ".", $greet = "It's an honor to meet you!") {
                if($name == "Kakashi") {
                    $prefix = "Copy ninja Hatake";
                } elseif($name == "Itachi") {
                    $prefix = "Clan killer Uchiha";
                } else {
                    $prefix = "King of hell Roronoa";
                }

                return "{$prefix} {$name}{$seperator} {$greet}";
            }
        }

        $name = new ChildClass1;
        echo "<p>" . $name -> prefixName("Itachi") . "</p>";

        $name1 = new ChildClass1;
        echo "<p>" . $name -> prefixName("Kakashi") . "</p>";

        $name2 = new ChildClass1;
        echo "<p>" . $name -> prefixName("Zoro") . "</p>";



        class ChildClass extends ParentClass {
            public function prefixname($name) {
                if($name == "Itachi") {
                    $prefix = "Uchiha";
                } elseif($name == "Kakashi") {
                    $prefix = "Hatake";
                } else {
                    $prefix = "Roronoa";
                }

                return "{$prefix} {$name}";
            }
        }

        $class = new ChildClass;
        echo "<p>" .$class -> prefixName("Itachi") . "</p>";

        $class1 = new ChildClass;
        echo "<p>" . $class -> prefixName("Zoro") . "</p>";


        abstract class Car {
            public $name;

            public function __construct($name) {
                $this -> name = $name;
            }
            abstract public function intro() : string;
        }

        class Audi extends Car {
            public function intro() : string {
                return "Choose German quality! I'm an {$this->name}!";
            }
        }

        class Volvo extends Car {
            public function intro() : string {
                return "French extravagence! I'm a {$this->name}";
            }
        }

        $audi = new audi("Audi");
        echo "<p>" . $audi -> intro() . "</p>";

        $volvo = new volvo("Volvo");
        echo "<p>" . $volvo -> intro() . "</p>";


        class Goodbye {
            const LEAVING_MESSAGE = "Thank you for visiting!";

            public function byebye() {
                echo self::LEAVING_MESSAGE;
            }
        }

        $goodbye = new Goodbye();
        echo "<p>" . $goodbye -> byebye() . "</p>";

        echo "<p>" . Goodbye::LEAVING_MESSAGE . "</p>";
        ?>
        </body>
    </html>