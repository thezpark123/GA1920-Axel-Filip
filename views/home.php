<?php
require "header.php"
?>
<body>
<div class="header">
<nav class="navbar navbar-light bg-black">
    <a href="home"><img src="../Assets/topMeme-logo.jpg" width="150" height="28" class="d-inline-block align-top" alt="site-logo"></a>
    <a class="navbar-brand" id ="nav-text" href="newPost">Upload</a>
    <form action="../includes/login.inc.php" method="post">
        <input disabled type="text" name="mailuid" placeholder="username/e-mail...">
        <input disabled type="password" name="pwd" placeholder="password">
        <button type="submit" name="login-submit">Login</button>
    </form>

    <a href="signup">Signup</a>

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

        <a href="<?= "/views/read.php?readPost=" . $post['id'] ?>">
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