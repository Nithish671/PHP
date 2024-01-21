<!DOCTYPE html>
<html>
    <head>
        <style>
            .error {color : #f00;}
        </style>
    </head>
    <body>
        <h1>My First PHP page</h1>
        <?php
        $nameErr = $emailErr = $genderErr = "";
        $name = $email = $gender = $comment = $website = "";
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = testInput($_POST["name"]);
            }

            if(empty($_POST["email"])) {
                $emailErr = "E-Mail is required";
            } else {
                $email = testInput($_POST["email"]);
            }

            if(empty($_POST["gender"])) {
                $genderErr = "Gender is required";
            } else {
                $gender = testInput($_POST["gender"]);
            }

            if(empty($_POST["website"])) {
                $website = "";
            } else {
                $website = testInput($_POST["website"]);
            }

            if(empty($_POST["comment"])) {
                $comment = "";
            } else {
                $comment = testInput($_POST["comment"]);
            }
        }

        function testInput($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <h2>PHP Form Validation Example</h2>
        <p><span class="error">* required field</span></p>

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        Name : <input type="text" name="name" /><span class="error"> * <?php echo $nameErr; ?></span>
        <br><br>
        E-Mail : <input type="email" name="email" /><span class="error"> * <?php echo $emailErr; ?></span>
        <br><br>
        Website : <input type="website" name="website" />
        <br><br>
        Comment : <textarea name="comment" rows="5" cols="40" style="display:block;"></textarea>
        <br><br>
        Gender : 
        <input type="radio" name="gender" value="Male" />Male
        <input type="radio" name="gender" value="Female" />Female
        <input type="radio" name="gender" value="other" />Other <span class="error"> * <?php echo $genderErr ?></span>
        <br><br>
        <input type="submit" />
        </form>

        <?php
        if($name != "" || $email != "" || $website != "" || $comment != "" || $gender != "") {
            echo "<h2>You Input : </h2>";
            echo "<p>Name : " . $name . "</p>";
            echo "<p>E-Mail : " . $email . "</p>";
            echo "<p>Website : " . $website . "</p>";
            echo "<p>Comment : " . $comment . "</p>";
            echo "<p>Gender : " . $gender . "</p>";
        }
        ?>
        </body>
    </html>