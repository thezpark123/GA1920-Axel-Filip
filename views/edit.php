<?php
require "../db.php";
$post = getPost($_GET["editPost"]);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?= $post[0]['caption'] ?> </title>
    <link rel="stylesheet" href="../stylesheets/main.css">
    <link rel="stylesheet" href="/stylesheets/form.css">
    <link rel="icon" href="../Assets/topMeme-icon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<?php
require "header.php";
?>

<body>


<form action="/update.php?updatePost=<?= $_GET['editPost'] ?>" method="post" enctype="multipart/form-data">

    <div class="form-group captionUpload">
        <label for="caption">Enter Caption</label>
        <br>
        <input type="text" name="caption" id="caption" value="<?= $post[0]['caption'] ?>">
    </div>

    <button id="submit-btn" type="submit">Edit</button>
</form>
</body>
</html>

