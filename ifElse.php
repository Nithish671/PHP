<!DOCTYPE html>
<html>
    <body>
        <h1>My First PHP page</h1>
        <?php
        $day = "wednesday";

        switch($day) {
            case "sunday" :
                echo "Holiday<br>";
                break;
            case "saturday":
                echo "Holiday<br>";
                break;
            default:
                echo "Working day<br>";
       }


        $t = date("H");

        if($t < "11") {
            echo "Good morning!<br>";
        } elseif ($t < "18") {
            echo "Good Afternoon!<br>";
        } else {
            echo "Good night!<br>";
        }

        if($t > 20) {
            echo "Good night<br>";
        } else {
            echo "Good day<br>";
        }


        if($t < 20) {
            echo "Good Night<br>";
            echo $t . "<br>";
        }

        ?>
        </body>
    </html>