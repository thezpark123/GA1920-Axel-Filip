<?php
require "header.php"
?>
<body>


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