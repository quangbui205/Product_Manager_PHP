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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<?php include "src/view/bootstrap/bootstrap.php" ?>

<?php
switch ($page) {
    case 'add-customer':
        $customerController->addCustomer();
        break;
    case 'list-products':
        $productController->viewProduct();
        break;
    case 'list-customers':
        $customerController->viewCustomer();
        break;
    case 'update-customer':
        $customerController->updateCustomer();
        break;
    case 'search-customer':
        $customerController->searchCustomer();
        break;
    case 'add-product':
        $productController->addProduct();
        break;
    case 'delete-product':
        $code = $_REQUEST['id'];
        $productController->deteleProduct($code);
        break;
    case 'update-product':
        $productController->updateProduct();
        break;
    case 'search-product':
        $productController->searchProduct();
        break;
    case 'list-orders':
        $orderController->viewOrder();
        break;
    case 'add-order':
        $orderController->addOrder();
        break;
    case 'delete-customer':
        $id = $_REQUEST['id'];
        $customerController->deteleCus($id);
        break;

    case 'show-product':
        $id =$_REQUEST['id'];
        $productController->showProduct($id);
        break;
    default :
            $productController->showDesk();
    
            break;
}
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>
