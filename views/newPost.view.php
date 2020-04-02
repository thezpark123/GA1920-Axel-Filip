<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <link rel="stylesheet" href="../stylesheets/card.css">
    <link rel="stylesheet" href="../stylesheets/form.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="../Assets/topMeme-icon.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
</head>


<?php
require "header.php";
?>
<body>
<br>

<form action="upload" method="post" enctype="multipart/form-data">
    <div class="form-group imgUpload">
        <label for="img"></label>
        <input type="file" name="file" id="img">
    </div>

    <div class="form-group captionUpload">
        <label for="caption">Enter Caption</label>
        <br>
        <input type="text" name="caption" id="caption">
    </div>

    <button id="submit-btn" name="submit" type="submit">Share</button>
</form>
</body>
</html>