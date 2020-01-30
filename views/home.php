<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>

<nav class="navbar navbar-light bg-black">
    <img src="../Assets/topMeme-logo.jpg" width="150" height="28" class="d-inline-block align-top" alt="">
    <a class="navbar-brand" id ="nav-text" href="newPost">Upload</a>
    <a class="navbar-brand" id ="nav-text" href="uploads">temp delete</a>

</nav>

<div class="container">

    <?php require "db.php";
    $options = $_POST;
    $posts = getAll($options);
    
    foreach ($posts as $post){
    ?>

        <div class="card">
            <img src="../Assets/topMeme.png"  class="card-img-top" alt="...">
            <div class="card-title"><?= $post["caption"]?></div>

        </div>

    <?php
    }
    ?>

</div>
</body>
</html>