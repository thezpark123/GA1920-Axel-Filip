<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="uploads" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="img"></label>
        <input type="file" name="img" id="img">
    </div>

    <div class="form-group">
        <label for="caption">Enter Caption</label>
        <input type="text" name="caption" id="caption">
    </div>

    <button id="submit-btn" type="submit">Share</button>
</form>

</body>
</html>