<?php

namespace File\model;

use File\model\DBconnext;

class ProductDB
{
    protected $database;

    public function __construct()
    {
        $db = new \File\model\DBconnext();
        $this->database = $db->connect();

    }
    public function viewProduct(){
        $sql = "SELECT * FROM products ";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }
    public function creatProduct($product){
        $sql ="INSERT INTO `products`(`productCode`, `productName`, `producer`, `description`, `price`, `image`, `quantityInStock`) VALUES (:productCode,:productName,:producer,:description,:price,:image,:quantityInStock)";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(" :productCode",$product->getProductCode());
        $stmt->bindParam(" :productName",$product->getProductName());
        $stmt->bindParam(" :producer",$product->getProducer());
        $stmt->bindParam(" :description",$product->getDescripton());
        $stmt->bindParam(" :price",$product->getPrice());
        $stmt->bindParam(" :image",$product->getImage());
        $stmt->bindParam(" :quantityInStock",$product->QuantityInStock());
        $stmt->execute();
    }
}