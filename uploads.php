<?php
require "db.php";

if (isset($_POST['submit'])){
    $file = $_FILES['img'];

    $fileName = $_FILES['img']['name'];
    $fileTmpName = $_FILES['img']['tmp_name'];
    $fileSize = $_FILES['img']['size'];
    $fileError = $_FILES['img']['type'];
    $fileType = $_FILES['img']['Type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png','gif');
    if (in_array($fileActualExt, $allowed)){
        if ($fileError === 0){
            if ($fileSize < 500000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'storePost'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("location: /home");
            }  else{
                echo "Your file is too big!"
                ;            }
        }
        else {
            echo "There was an error uploading your file!";
        }
    }
    else{
        echo "You can not upload this type of file!";
    }
}
