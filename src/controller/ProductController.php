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
            header("location:index.php?page=list-products");
        }
    }

    public function deteleProduct($code)
    {
        $this->product->deleteProduct($code);
        header("location:index.php?page=list-products");
    }

    public function updateProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET['id'];
            $product = $this->product->get($id);
            include "src/view/updateProduct.php";
        } else {
            $id = $_REQUEST['id'];
            $productName = $_REQUEST['productName'];
            $producer = $_REQUEST['producer'];
            $description = $_REQUEST['description'];
            $price = $_REQUEST['price'];
            $image = $_REQUEST['image'];
            $quantityInStock = $_REQUEST['quantityInStock'];
            $product = new Product($id, $productName, $producer, $description, $price, $image, $quantityInStock);
            $this->product->updateProduct($product);
            header("location:index.php?page=list-products");
        }
    }
    public function searchProduct(){}
}