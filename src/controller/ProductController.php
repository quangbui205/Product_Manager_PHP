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

    public function viewProduct()
    {

        $products = $this->product->view();
        include "src/view/products/listProducts.php";

    }

    public function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include "src/view/products/addProduct.php";
        } else {
            $productCode = $_REQUEST['productCode'];
            $productName = $_REQUEST['productName'];
            $producer = $_REQUEST['producer'];
            $description = $_REQUEST['description'];
            $price = $_REQUEST['price'];
            if (($_FILES['image']['type']!="image/png")
                &&($_FILES['image']['type']!="image/jpg")
                &&($_FILES['image']['type']!="image/jpeg"))
            {
                echo $message="Not right form";
            } elseif ($_FILES['image']['size']=='') {
                echo $message="You must choose file image";
            } else {
                $img=$_FILES['image']['name'];
                $image='images/'.$img;
                move_uploaded_file($_FILES['image']['tmp_name'],"images/".$img);}
            $quantityInStock = $_REQUEST['quantityInStock'];
            $product = new Product($productCode, $productName, $producer, $description, $price, $image, $quantityInStock);
            $this->product->creat($product);
            header("location:index.php?page=list-products");
        }
    }

    public function deteleProduct($code)
    {
        $this->product->delete($code);
        header("location:index.php?page=list-products");
    }

    public function updateProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET['id'];
            $product = $this->product->get($id);
            include "src/view/products/updateProduct.php";
        } else {
            $id = $_REQUEST['id'];
            $productName = $_REQUEST['productName'];
            $producer = $_REQUEST['producer'];
            $description = $_REQUEST['description'];
            $price = $_REQUEST['price'];
            $image = $_REQUEST['image'];
            $quantityInStock = $_REQUEST['quantityInStock'];
            $product = new Product($id, $productName, $producer, $description, $price, $image, $quantityInStock);
            $this->product->update($product);
            header("location:index.php?page=list-products");
        }
    }

    public function searchProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "src/view/products/searchProduct.php";
        } else {
            $search = $_POST["search"];
            if (empty($search)) {
                header("location:index.php?page=list-products");
            } else {
                $products = $this->product->search($search);
                include "src/view/products/searchProduct.php";
            }
        }
    }
}