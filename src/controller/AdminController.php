<?php
namespace File\controller;
use File\model\Product;

class AdminController
{
protected $product;
public function __construct()
{
    $this->product= new Product();
}
public function showProduct(){
    $products=$this->product->viewProduct();
include "listProducts.php";
}
}