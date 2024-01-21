<!DOCTYPE html>
<html>
    <head>
        <title>Php Practice</title>
    </head>
    <body>
        <h1>My First PHP page</h1>
        <?php
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["fileUpload"]["name"]);
        $uploadOk = 1;
        $imageType =  strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image";
                $uploadOk = 0;
            }
        }

        if(file_exists($targetFile)) {
            echo "Sorry, file already exists...";
        }

        if($_FILES["fileUpload"]["size"] > 5000000) {
            echo "Sorry, your file is too large";
            $uploadOk = 0;
        }

        if($imageType != "jpg" && $imageType != "png" && $imageType != "jpeg" && $imageType != "gif") {
            echo "Sorry, this format of image not supported";
            $uploadOk = 0;
        }

        if($uploadOk == 0) {
            echo "Sorry, Your file was not uploaded...";
        } else {
            if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $targetFile)) {
                echo "The file " . htmlspecialchars(basename($_FILES["fileUpload"]["name"])) . " has been uploaded";
            } else {
                echo "Sorry, there was an error uploading file...";
            }
        }

        ?>
        </body>
    </html>