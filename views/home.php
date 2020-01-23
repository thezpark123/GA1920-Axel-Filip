<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
<div class="wrapper">

<<<<<<< HEAD
    <?php require "db.php";
    $posts = getAll($_GET);
=======
    <?php
    require "db.php";
    $options = $_POST;
    $posts = getAll($options);
    var_dump($options);
>>>>>>> 9673f3ad3c4a78b8aa00dbdc84d341e26b86c3ed

    foreach ($posts as $post){
    ?>

        <div class="card">
            <div class="card-text"><?= $post["caption"]?></div>
            <p>hej</p>
        </div>

    <?php
    }
    ?>

</div>
</body>
</html>