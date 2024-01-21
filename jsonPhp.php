<!DOCTYPE html>
<html>
    <head>
        <title>Php Practice</title>
    </head>
    <body>
        <h1>My First PHP page</h1>
        <?php
        $jsonObj = '{"Luffy":19, "Zoro":21, "Sanji":21}';
        $arr = json_decode($jsonObj, true);

        foreach($arr as $k => $v) {
            echo "<p>Key : " . $k . ", Value : " . $v ."</p>";
        }


        $jsonObj = '{"Luffy":19, "Zoro":21, "Sanji":21}';
        $obj = json_decode($jsonObj);

        foreach($obj as $k => $v) {
            echo "<p>Key : " . $k . ", Value : " . $v ."</p>";
        }


        $jsonObj = '{"Luffy":19, "Zoro":21, "Sanji":21}';
        $arr = json_decode($jsonObj, true);

        echo "<p>" . $arr["Luffy"] . "</p>";
        echo "<p>" . $arr["Zoro"] . "</p>";
        echo "<p>" . $arr["Sanji"] . "</p>";


        $jsonObj = '{"Luffy":19, "Zoro":21, "Sanji":21}';
        $obj = json_decode($jsonObj);

        echo "<p>" . $obj -> Luffy . "</p>";
        echo "<p>" . $obj -> Zoro . "</p>";
        echo "<p>" . $obj -> Sanji . "</p>";


        $jsonObj = '{"Luffy":19, "Zoro":21, "Sanji":21}';
        var_dump(json_decode($jsonObj, true));
        echo "<br>";


        $jsonObj = '{"Luffy":19, "Zoro":21, "Sanji":21}';
        var_dump(json_decode($jsonObj));
        echo "<br>";

        $age = array("Itachi" => 20, "Sasuke" => 17, "Satoru" => 25);
        $cars = array("BMW", "AUDI", "Volvo");

        echo "<p>" . json_encode($cars) . "</p>";
        echo "<p>" . json_encode($age) . "</p>";
        ?>
        </body>
    </html>