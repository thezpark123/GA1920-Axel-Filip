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

<form action="../includes/login.inc.php" method="post">
<input type="text" name="mailuid" placeholder="username/e-mail...">
<input type="password" name="pwd" placeholder="password">
<button type="submit" name="login-submit">Login</button>
</form>
<a href="signup.php">Signup</a>
<form action="../includes/logout.inc.php" method="post">
    <button type="submit" name="logout-submit">Logout</button>
</form>
</body>
</html>