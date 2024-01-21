<!DOCTYPE html>
<html>
    <head>
        <title>Simple XML Parser Get</title>
    </head>
    <body>
        <?php
        $xml = simplexml_load_file("books.xml") or die("Error : Cannot create object");
        
        foreach($xml -> children() as $books) {
            echo "<h2>" . $books -> title . "</h2>";
            echo "<p><b>Category :</b> " . $books['category'] . "</p>";
            echo "<p><b>Language :</b> " . $books -> title['lang'] . "</p>";
            echo "<p><b>Author :</b> " . $books -> author . "</p>";
            echo "<p><b>Year :</b> " . $books -> year . "</p>";
            echo "<p><b>Price :</b> " . $books -> price . "</p>";
            echo "<br><br>";
        }


        echo "<br><br><br>";
        echo "<h2>Loop through the values using ForEach</h2>";

        foreach($xml -> children() as $books) {
            echo "<h2>" . $books -> title . "</h2>";
            echo "<p>Author : " . $books -> author . "</p>";
            echo "<p>Year : " . $books -> year . "</p>";
            echo "<p>Price : " . $books -> price . "</p>";
            echo "<br><br>";
        }

        echo "<br><br><br>";
        for($i = 0; $i < 4; $i++) {
            echo "<h2>" . $xml -> book[$i] -> title . "</h2>";
            echo "<p>Author : " . $xml -> book[$i] -> author . "</p>";
            echo "<p>Year : " . $xml -> book[$i] -> year . "</p>";
            echo "<p>Price : " . $xml -> book[$i] -> price . "</p>";
            echo "<br><br>";
        }
        ?>
        </body>
    </html>