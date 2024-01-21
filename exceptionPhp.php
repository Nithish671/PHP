<!DOCTYPE html>
<html>
    <head>
        <title>Php Practice</title>
    </head>
    <body>
        <h1>My First PHP page</h1>
        <?php
        function divide4($dividend, $divisor) {
            if($divisor == 0) {
                throw new Exception("Divison by zero", 1);
            }
            return $dividend / $divisor;
        }

        try {
            echo "<p>" . divide4(25, 0) . "</p>";
        } catch(Exception $e) {
            $message = $e -> getMessage();
            $code = $e -> getCode();
            $file = $e -> getFile();
            $line = $e -> getLine();

            echo "<p>Exception thrown in $file on line $line : [Code $code] $message</p>";
        }



        function divide3($dividend, $divisor) {
            if($divisor == 0) {
                throw new Exception("Division by zero");
            }
            return $dividend / $divisor;
        }

        try {
            echo "<p>" . divide3(10, 11) . "</p>";
        } finally {
            echo "<p>Process complete</p>";
        }



        function divide2($dividend, $divisor) {
            if($divisor == 0) {
                throw new Exception("Division by zero");
            }
            return $dividend / $divisor;
        }

        try {
            echo "<p>" . divide2(25, 0) . "</p>";
        } catch (Exception $e) {
            echo "<p>Unable to divide</p>";
        } finally {
            echo "<p>Process complete</p>";
        }



        function divide1($dividend, $divisor) {
            if($divisor == 0) {
                throw new Exception("Divison by zero");
            }
            return $dividend / $divisor;
        }

        try {
            echo "<p>" . divide1(25, 0) . "</p>";
        } catch(Exception $e) {
            echo "<p>Unable to divide</p>";
        }


        function divide($dividend, $divisor) {
            if($divisor == 0) {
                throw new Exception("Division by zero");
            }
            return $dividend / $divisor;
        }

        echo "<p>" . divide(10, 6) . "</p>";
        ?>
        </body>
    </html>