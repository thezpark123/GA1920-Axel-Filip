<?php
require "../db.php";
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
    <link rel="stylesheet" href="/stylesheets/main.css">
    <link rel="stylesheet" href="/stylesheets/read.css">
    <link rel="icon" href="../Assets/topMeme-icon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-light bg-black">
    <a href="../home"><img src="/Assets/topMeme-logo.jpg" width="150" height="28" class="d-inline-block align-top" alt="site-logo"></a>
    <a class="navbar-brand" id ="nav-text" href="../newPost">Upload</a>
    <a class="navbar-brand" id ="nav-text-2" href="#">temp delete</a>

</nav>

<div class="grid-container">
    <h2 id="read-caption"><?= $post[0]['caption'] ?></h2>
    <img id="post-img" class="card-img-top" alt="the-post" src=<?= "../uploads/" . $post[0]['img']?> ">
</div>

</body>
</html>
