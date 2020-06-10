<?php

namespace File\controller;

use File\model\Product;
use File\model\ProductDB;

class ProductController
{
    protected $product;


    public function __construct()
    {
        $this->product = new ProductDB();

    }

    public function showProduct()
    {

        $products = $this->product->viewProduct();
        include "src/view/listProducts.php";

    }

    public function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include "src/view/addProduct.php";
        } else {
            $productCode = $_REQUEST['productCode'];
            $productName = $_REQUEST['productName'];
            $producer = $_REQUEST['producer'];
            $description = $_REQUEST['description'];
            $price = $_REQUEST['price'];
            $image = $_REQUEST['image'];
            $quantityInStock = $_REQUEST['quantityInStock'];
            $product = new Product($productCode, $productName, $producer, $description, $price, $image, $quantityInStock);
            $this->product->creatProduct($product);
            header("localtion:listProducts.php ");
        }
    }

}