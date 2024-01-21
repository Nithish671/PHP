<?php
$cookieName = "user";
$cookieValue = "Itachi";
#setcookie("user1", "Satoru Gojo", time() + 86400, "/");
#setcookie($cookieName, $cookieValue, time() + 86400, "/");
setcookie("user", "", time() - 86400);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Php Practice</title>
    </head>
    <body>
        <h1>My First PHP page</h1>
        <?php
        if(!isset($_COOKIE[$cookieName])) {
            echo "Cookie named '" . $cookieName . "' is not set!";
        } else {
            echo "Cookie '" . $cookieName . "'is set!<br>";
            echo "Value is : " . $_COOKIE[$cookieName] . "<br>";
        }

        if(count($_COOKIE) > 0) {
            echo "Cookies are enabled";
        } else {
            echo "Cookies are disabled";
        }
        ?>
        </body>
    </html>