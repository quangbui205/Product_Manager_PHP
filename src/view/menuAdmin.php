<?php
use File\controller\AdminController;
require_once '../../vendor/autoload.php';
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
$adminController = new AdminController();
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
<a href="menuAdmin.php?page=list-products">ProductsList</a>
<a href="menuAdmin.php?page=orders-list">OdersList</a>
<a href="menuAdmin.php?page=cutomers-list">CustomersList</a>

<?php
switch ($page) {
    case 'list-products':
        $adminController->showProduct();
}
?>
</body>
</html>
