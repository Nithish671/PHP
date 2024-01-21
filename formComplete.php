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
                $nameErr = "Name is required";
            } else {
                $nameDemo = testInput($_POST["name"]);
                if(!preg_match("/^[a-zA-Z-' ]*$/",$nameDemo)) {
                    $nameErr = "Only letters and white space allowed";
                } else {
                    $name = $nameDemo;
                }
            }

            if(empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $emailDemo = testInput($_POST["email"]);
                if(!filter_var($emailDemo, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                } else {
                    $email = $emailDemo;
                }
            }

            if(empty($_POST["website"])) {
                $website = "";
            } else {
                $websiteDemo = testInput($_POST["website"]);

                if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $websiteDemo)) {
                    $websiteErr = "Invalid URL";
                } else {
                    $website = $websiteDemo;
                }
            }

            if(empty($_POST["comment"])) {
                $comment = "";
            } else {
                $comment = testInput($_POST["comment"]);
            }

            if(empty($_POST["gender"])) {
                $genderErr = "Gender is required";
            } else {
                $gender = testInput($_POST["gender"]);
            }

        }


        function testInput($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Name : <input type="text" name="name" value="<?php echo $name; ?>"><span class="error"> * <?php echo $nameErr; ?></span>
        <br><br>
        E-Mail : <input type="email" name="email" value="<?php echo $email; ?>"><span class="error"> * <?php echo $emailErr; ?></span>
        <br><br>
        Website : <input type="website" name="website" value="<?php echo $website; ?>"> <span class="error"> <?php echo $websiteErr; ?></span>
        <br><br>
        Comment : <textarea rows="5" cols="40" name="comment" style="display:block;"><?php echo $comment; ?></textarea>
        <br><br>
        Gender : 
        <input type="radio" name="gender" <?php if(isset($gender) && $gender == "Female") echo "checked";; ?> value="Female">Female
        <input type="radio" name="gender" <?php if(isset($gender) && $gender == "Male") echo "checked"; ?> value="Male">Male
        <input type="radio" name="gender" <?php if(isset($gender) && $gender == "Other") echo "checked"; ?> value="Other">Other <span class="error"> * <?php echo $genderErr; ?></span>
        <br><br>
        <input type="submit">
        </form>

        <?php
        if($name != "" || $email != "" || $website != "" || $gender != "" || $comment != "") {
            echo "<h1>Your Input</h1>";
            echo "<p>Name : " . $name . "</p>";
            echo "<p>E-Mail : " . $email . "</p>";
            echo "<p>Website : " . $website . "</p>";
            echo "<p>Comment : " . $comment . "</p>";
            echo "<p>Gender : " . $gender . "</p>";
        }
        ?>
        </body>
    </html>