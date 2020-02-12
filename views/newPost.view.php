<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../stylesheets/form.css">
    <link rel="stylesheet" href="../stylesheets/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="../Assets/topMeme-icon.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
</head>
<body>

<nav class="navbar navbar-light bg-black">
    <a href="home"><img src="../Assets/topMeme-logo.jpg" width="150" height="28" class="d-inline-block align-top" alt="site-logo"></a>
    <a class="navbar-brand" id ="nav-text" href="newPost">Upload</a>
    <a class="navbar-brand" id ="nav-text-2" href="delete">temp delete</a>
</nav>

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