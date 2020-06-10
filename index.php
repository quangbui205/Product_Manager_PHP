<?php
use File\controller\ProductController;
use File\controller\OrderController;
use File\controller\CustomerController;
require_once 'vendor/autoload.php';
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
$productController = new ProductController();
$orderController = new OrderController();
$customerController = new CustomerController();
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
<a href="index.php?page=list-products">ProductsList</a>
<a href="index.php?page=orders-list">OdersList</a>
<a href="index.php?page=cutomers-list">CustomersList</a>

<?php
switch ($page) {
    case 'list-products':
        $productController->showProduct();
        break;
    case 'orders-list':
        $orderController->showOrder();
        break;
    case 'cutomers-list':
        $customerController->showCustomer();
        break;
    case 'add-product':
        $productController->addProduct();
        break;
    case 'delete-product':
        $code=$_REQUEST['id'];
        $productController->deteleProduct($code);
    case 'update-product':
        $code=$_REQUEST['id'];
}
?>
</body>
</html>
