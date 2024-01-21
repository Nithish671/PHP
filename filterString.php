<!DOCTYPE html>
<html>
    <head>
        <title>Php Practice</title>
    </head>
    <body>
    <?php
    $str = "<h1>Hello WorldÆØÅ!</h1>";

    $newStr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    echo "<p>" . $newStr . "</p>";


    $url = "https://www.it4chi.com/search?q=sasuke";

    if(!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
        echo "<p>" . $url . " is a valid URL with a query string</p>";
    } else {
        echo "<p>" . $url . " is not a valid URL with a query string</p>";
    }


    $int = 25;
    $min = 1;
    $max = 100;

    if(filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max))) === false) {
        echo "<p>Variable value is not within range</p>";
    } else {
        echo "<p>Variable value is within range</p>";
    }



    $url = "https://www.s4torugojo.com";
    $url = filter_var($url, FILTER_VALIDATE_URL);
    
    if(!filter_var($url, FILTER_VALIDATE_URL) === false) {
        echo "<p>" . $url . " is a valid url";
    } else {
        echo "<p>" . $url . " is not a valid url</p>";
    }


    $email = "itachi@uchiha.com";
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo "<p>" . $email ." is a valid email address</p>";
    } else {
        echo "<p>" . $email . " is not a valid email address</p>";
    }

    $ip = "127.0.0.1";

    if(!filter_var($ip, FILTER_VALIDATE_IP) === false) {
        echo "<p>" . $ip . " is a valid IP address</p>";
    } else {
        echo "<p>" .$ip. " is not a valid IP address</p>";
    }

    $str = "<h1>Hello world</h1>";
    $newStr = filter_var($str, FILTER_SANITIZE_STRING);
    echo "<p>" . $newStr . "</p>";

    $int = 25;
    if(!filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo "<p>" . $int ." is valid.</p>";
    } else {
        echo "<p>" . $int . " is not valid.</p>";
    }
    echo "<p>" . filter_var($int, FILTER_VALIDATE_INT) . "</p>";

    $int = 25;
    if(filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo "<p>" . $int ." is valid.</p>";
    } else {
        echo "<p>" . $int ." is not valid.</p>";
    }
    ?>
    </body>
</html>