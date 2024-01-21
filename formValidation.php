<!DOCTYPE html>
<html>
    <body>
        <h1>My First PHP page</h1>
        <?php
        $name = $email = $gender = $comment = $website = "";

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = testInput($_POST["name"]);
            $email = testInput($_POST["email"]);
            $website = testInput($_POST["website"]);
            $comment = testInput($_POST["comment"]);
            $gender = testInput($_POST["gender"]);
        }

        function testInput($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <h1>PHP Form Validation Example</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Name : <input type="text" name="name" />
        <br><br>
        E-Mail : <input type="email" name="email">
        <br><br>
        Website : <input type="text" name="website">
        <br><br>
        Comment : <textarea name="comment" rows="5" cols="40" style="display:block;"></textarea>
        <br><br>
        Gender : 
        <input type="radio" name="gender" value="female" />Female
        <input type="radio" name="gender" value="male" />Male
        <input type="radio" name="gender" value="other" />Other
        <br><br>
        <input type="submit" value="Submit">
        </form>

        <?php
        if($name !="" || $email !="" || $website != "" || $comment != "" || $gender !=""){
        echo "<h2>Your Input : </h2>";
        echo "<p>Name : " . $name . "</p>";
        echo "<p>E-Mail : " . $email . "</p>";
        echo "<p>Website : " . $website . "</p>";
        echo "<p>Comment : " . $comment . "</p>";
        echo "<p>Gender : " . $gender . "</p>";
        } 
        ?>
        </body>
    </html>