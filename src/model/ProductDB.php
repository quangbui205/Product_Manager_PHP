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
        $sql ="INSERT INTO `products`(`productCode`, `productName`, `producer`, `description`, `price`, `image`, `quantityInStock`) VALUES (?,?,?,?,?,?,?)";
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(1,$product->getProductCode());
        $stmt->bindParam(2,$product->getProductName());
        $stmt->bindParam(3,$product->getProducer());
        $stmt->bindParam(4,$product->getDescription());
        $stmt->bindParam(5,$product->getPrice());
        $stmt->bindParam(6,$product->getImage());
        $stmt->bindParam(7,$product->getQuantityInStock());
        $stmt->execute();
    }
}