<!DOCTYPE html>
<html>
    <body>
        <h1>My First PHP page</h1> 
        <?php
        $d1 = strtotime("March 24");
        $d2 = ceil(($d1-time())/60/60/24);
        echo "There are " . $d2 . " days until 24th of March";

        echo "<br>";
        $startDate = strtotime("Wednesday");
        $endDate = strtotime("+6 weeks", $startDate);

        while($startDate < $endDate) {
            echo "Date : " . date("M d", $startDate) . "<br>";
            $startDate = strtotime("+1 week", $startDate);
        }

        echo "<br>";
        $d = strtotime("+3 months");
        echo "Date : " . date("d-m-Y , h:i:s a", $d) . "<br>";

        echo "<br>";
        $d = strtotime("next Monday");
        echo "Date : " . date("d-m-Y , h:i:s a", $d) . "<br>";
        
        echo "<br>";
        $d = strtotime("tomorrow");
        echo "Date : " . date("d/m/Y , h:i:s a", $d) . "<br>"; 


        echo "<br>";
        $d = strtotime("10:25pm April 19 2023");
        echo "Created time : " . date("d-m-Y , h:i:s a") . "<br>";

        $d = mktime(18, 8, 25, 10, 25, 2000);

        echo "<br>";
        echo "Created Date and Time : " . date("h : i : s a,   d - m - Y" ,$d) . "<br>";

        echo "<br>";
        date_default_timezone_set("Asia/Kolkata");
        echo "Time : " . date("h:i:s a") . "<br>";
        echo "Time : " . date("H:i:s") . "<br>";

        echo "<br>";
        echo "Today is : " , date("Y/m/d") , "<br>";
        echo "Today is : " . date("Y . m . d") . "<br>";
        echo "Today is : " . date("Y-m-d") . "<br>";
        echo "Today is : " . date("l") . "<br>";
        ?>
        <p>&copy; 2022 - <?php echo date("Y"); ?>
        </body>
    </html>