<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="upload" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="img"></label>
        <input type="file" name="file" id="img">
    </div>

    <div class="form-group">
        <label for="caption">Enter Caption</label>
        <input type="text" name="caption" id="caption">
    </div>

    <button id="submit-btn" name="submit" type="submit">Share</button>
</form>

</body>
</html>