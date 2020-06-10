<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $password = $_POST['password'];
    if ($user == "admin" && $password == "admin") {
        header('location:src/view/menuAdmin.php');
    }
    else {
        echo "Sai mat khau";
    }
}

?>
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
<form method="post">
    username :
    <input type="text" name="user"><br>
    password :
    <input type="password" name="password"><br>
    <button type="submit" name="login">Login</button>
</form>
abcfs
</body>
</html>