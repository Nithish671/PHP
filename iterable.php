<!DOCTYPE html>
<html>
    <head>
        <title>Php Practice</title>
    </head>
    <body>
        <h1>My First PHP page</h1>
        <?php
        class MyIterator implements Iterator {
            private $items = [];
            private $pointer = 0;

            public function __construct($items) {
                $this->items = array_values($items); 
            }

            public function current() {
                return $this->items[$this->pointer];
            }

            public function key() {
                return $this->pointer;
            }

            public function next() {
                $this->pointer++;
            }

            public function rewind() {
                $this->pointer = 0;
            }

            public function valid() {
                return $this->pointer < count($this->items);
            }
        }

        function printIter1(iterable $myIter1) {
            foreach($myIter1 as $i) {
                echo "<p>" . $i . "</p>";
            }
       }

       $iter1 = new MyIterator([1, 2, 3, 4]);
       //printIter1($iter1);

       echo "<br><br>";

       $iter1->next();
       $iter1->next();
       echo "<p>" . $iter1->current() . "</p>";
       echo "<p>" . $iter1->key() . "</p>";

       echo "<br><br>";

        function getIter() : iterable {
            return ["a", "b", "c"];
        }


        $myIt = getIter();
        foreach($myIt as $m) {
            echo "<p>" . $m . "</p>";
        }



        function printIterable(iterable $myIter) {
            foreach($myIter as $item) {
                echo "<p>" . $item . "</p>";
            }
        }

        $arr = ["a", "b", "c"];

        printIterable($arr);
         ?>
         </body>
     </html>