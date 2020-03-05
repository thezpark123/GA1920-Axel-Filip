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

    </nav>

</div>

<div class="form">
    <div class="wrapper-main">
        <section class="section-default">
            <h1>Sign up</h1>
            <form action="../includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="text" name="mail" placeholder="E-mail">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd-repeat" placeholder="Repeat password">
                <button type="submit" name="signup-submit">Sign up</button>
            </form>
        </section>
    </div>
</div>
</body>
</html>