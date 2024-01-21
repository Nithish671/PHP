<!DOCTYPE html>
<html>
    <head>
        <title>Php Practice</title>
        <style>
            table, th, td {
            border: 2px solid black;
            border-collapse : collapse;
            }
            th, td {
                padding : 5px;
            }
        </style>
    </head>
    <body>
        <h1>My First PHP page</h1>
        <table>
            <tr>
                <th>Filter Name</th>
                <th>Filter Id</th>
            </tr>
        <?php
        foreach(filter_list() as $id => $filter) {
            echo "<tr><td>" . $filter . "</td><td>" . filter_id($filter) . "</td></tr>";
        }
        ?>
        </table>
        </body>
    </html>