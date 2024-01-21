<!DOCTYPE html>
<html>
    <head>
        <title>Php Practice</title>
        <style>
            nav {
                width: 100vw;
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }
            li {
                float: left;
            }

            li a {
                display: block;
                padding: 8px;
                background-color: #ddd;
            }
        </style>
    </head>
    <body>
        <h1>My First PHP page</h1>
        <?php
        /*require 'noFile1.php';
        echo "<p>I have $brand1 $model1</p>";*/
        ?>

        <?php include 'noFile.php';
        echo "<p>I have a $brand $model</p>";
        ?>
        
        <?php include 'vars.php'; ?>

        <?php
        echo "<p>I have $color $car</p>" 
        ?>



        <p>This example shows the</p>
        <p>include statement</p>
        <nav>
        <?php
        include 'menu.php';
        ?>
        </nav>
        <?php include 'footer.php'; ?>
        </body>
</html>