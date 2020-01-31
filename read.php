<?php
require "db.php";
$post = getPost($_GET["readPost"]);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?= $post[0]['caption'] ?> </title>
</head>
<body>

<div class="grid-container">
    <h2><?= $post[0]['caption'] ?></h2>
    <img src="./Assets/topMeme.png" alt="placeholder">
</div>

</body>
</html>
