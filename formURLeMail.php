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
        $nameErr = $emailErr = $websiteErr = $genderErr = "";
        $name = $email = $website = $comment = $gender = "";

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($_POST["name"])) {
                $nameErr = "Name required";
            } else {
                $name = inputCheck($_POST["name"]);
            }

            if(empty($_POST["email"])) {
                $emailErr = "E-mail is required";
            } else {
                $emailDemo = inputCheck($_POST["email"]);
                if(!filter_var($emailDemo, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                } else {
                    $email = $emailDemo;
                }
            }

            if(empty($_POST["website"])) {
                $websiteErr = "Website is required";
            } else {
                $websiteDemo = inputCheck($_POST["website"]);
                if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.]*[-a-z0-9+$@#\/%=~_|]/i", $websiteDemo)) {
                    $websiteErr = "Invalid url";
                } else {
                    $website = $websiteDemo;
                }
            }

            if(empty($_POST["comment"])) {
                $comment = "";
            } else {
                $comment = inputCheck($_POST["comment"]);
            }

            if(empty($_POST["gender"])) {
                $genderErr = "Gender is required";
            } else {
                $gender = inputCheck($_POST["gender"]);
            }
        } 

        function inputCheck($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <h1>PHP Form Validation Example</h1>
        <p><span class="error">* required field</span></p>

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        Name : <input type="text" name="name" /><span class="error"> * <?php echo $nameErr ?></span>
        <br><br>
        E-Mail : <input type="email" name="email" /><span class="error"> * <?php echo $emailErr ?></span>
        <br><br>
        Website : <input type="website" name="website" /><span class="error"> * <?php echo $websiteErr ?></span>
        <br><br>
        Comment : <textarea name="comment" row="5" col="40" style="display:block;"></textarea>
        <br><br>
        Gender : 
        <input type="radio" name="gender" value="Male" />Male
        <input type="radio" name="gender" value="Female" />Female
        <input type="radio" name="gender" value="Other" />Other<span class="error"> * <?php echo $genderErr ?></span>
        <br><br>
        <input type="submit">
        </form>

        <?php
        if($name != "" || $email != "" || $website != "" || $comment != "" || $gender != "") {
            echo "<h1>Your Input : </h1>";
            echo "<p>Name : " . $name . "</p>";
            echo "<p>E-Mail : " . $email . "</p>";
            echo "<p>Website : " . $website . "</p>";
            echo "<p>Comment : " . $comment . "</p>";
            echo "<p>Gender : " . $gender . "</p>";
        }
        ?>
        </body>
    </html>