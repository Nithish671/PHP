<!DOCTYPE html>
<html>
    <body>
        <h1>My First PHP page</h1>
        <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            Name : <input type = "text" name = "fName" id = "fname" />
            <input type="submit" />
        </form>

        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['fName'];
            if(empty($name)) {
                echo "<p>Name is empty</p>";
            } else {
                echo "<p>" . $name . "</p>";
            }
        }
        

        echo "<p>" . $_SERVER['PHP_SELF'] ."</p>";
        echo "<p>" . $_SERVER['SERVER_NAME'] ."</p>";
        echo "<p>" . $_SERVER['HTTP_HOST'] ."</p>";
        echo "<p>" . $_SERVER['HTTP_REFERER'] ."</p>";
        echo "<p>" . $_SERVER['HTTP_USER_AGENT'] ."</p>";
        echo "<p>" . $_SERVER['SCRIPT_NAME'] ."</p>";
        echo "<p>" . $_SERVER['GATEWAY_INTERFACE'] ."</p>";
        echo "<p>" . $_SERVER['SERVER_ADMIN'] ."</p>";
        echo "<p>" . $_SERVER['SERVER_PORT'] ."</p>";


        $x = 25;
        $y = 6;

        function add() {
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        add();
        echo "$z<br>";
        ?>
        </body>
    </html>