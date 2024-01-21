<?php 
namespace Html;
class Table {
    public $title = "";
    public $numRows = 0;

    public function message() {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows</p>";
    }
}
$table = new Table();
$table -> title = "My table";
$table -> numRows = 25;
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
        ?>
        </body>
    </html>