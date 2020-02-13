<!doctype html>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="/stylesheets/main.css">
    <link rel="stylesheet" href="/stylesheets/card.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="icon" href="../Assets/topMeme-icon.png">
</head>

<body>
<div class="header">
<nav class="navbar navbar-light bg-black">
    <a href="home"><img src="../Assets/topMeme-logo.jpg" width="150" height="28" class="d-inline-block align-top" alt="site-logo"></a>
    <a class="navbar-brand" id ="nav-text" href="newPost">Upload</a>
    <form action="../includes/login.inc.php" method="post">
        <input type="text" name="mailuid" placeholder="username/e-mail...">
        <input type="password" name="pwd" placeholder="password">
        <button type="submit" name="login-submit">Login</button>
    </form>
    <a href="signup.php">Signup</a>
    <form action="../includes/logout.inc.php" method="post">
        <button type="submit" name="logout-submit">Logout</button>
    </form>
</nav>

</div>

<div class="container">

    <?php require "db.php";
    $options = $_POST;
    $posts = getAll($options);
    
    foreach ($posts as $post){
    ?>

        <a href="/views/read.php?readPost=<?= $post['id'] ?>">
        <div class="card">
            <div>
            <img src=<?= "../uploads/" . $post['img']?> class="card-img-top" alt="the-post">
            </div>
        </a>
    <div class="card-bot">
            <div class="card-title"> <?= $post["caption"]?> </div>
        <div class="edit-card">  <a href="/views/edit.php?editPost=<?= $post['id'] ?>" class="btn">Redigera</a> </div>
        </div>
</div>

    <?php
    }
    ?>

</body>
</html>