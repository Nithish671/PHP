<?php
include "html.php";

use Html\Table as T;
use Html\Row as R;

$table = new T();
$row = new R();

$table -> title = "Satoru Gojo";
$table -> numRows = 25;

$row -> numCells = 6;

/* use Html as H;
$table = new H\Table();
$row = new H\Row();
$table -> title = "Zoro";
$table -> numRows = 10;

$row -> numCells = 11; */

/* namespace Html;
include "html.php";

$table = new Table();
$table -> title = "Your table";
$table -> numRows = 25;

$row = new Row();
$row -> numCells = 10; */ 

/* include "html.php";

$table = new Html\Table();
$table -> title = "My table";
$table -> numRows = 25;

$row = new Html\Row();
$row -> numCells = 25; */
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Php Practice</title>
    </head>
    <body>
        <h1>My First PHP page</h1>
        <?php
        $table -> message();
        $row -> message();
        ?>
         </body>
     </html>