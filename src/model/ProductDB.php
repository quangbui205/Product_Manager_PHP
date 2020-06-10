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

    public function viewProduct()
    {
        $sql = "SELECT * FROM products ";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function creatProduct($product)
    {
        $sql = "INSERT INTO `products`(`productCode`, `productName`, `producer`, `description`, `price`, `image`, `quantityInStock`) VALUES (?,?,?,?,?,?,?)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $product->getProductCode());
        $stmt->bindParam(2, $product->getProductName());
        $stmt->bindParam(3, $product->getProducer());
        $stmt->bindParam(4, $product->getDescription());
        $stmt->bindParam(5, $product->getPrice());
        $stmt->bindParam(6, $product->getImage());
        $stmt->bindParam(7, $product->getQuantityInStock());
        $stmt->execute();
    }

    public function deleteProduct($code)
    {
        $sql = "DELETE FROM products WHERE productCode= :code";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":code", $code);
        $stmt->execute();
    }

    public function get($id)
    {
        $sql = "SELECT * FROM products WHERE Id= :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch();

    }

    public function updateProduct($product, $id)
    {
        $sql = "UPDATE `products` SET productName= :name,producer= :producer,description= :description,price= :price,image= :image,quantityInStock= :quantityInStock WHERE producCode= :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":name", $product->getProductName());
        $stmt->bindParam(":producer", $product->getProductName());
        $stmt->bindParam(":description", $product->getDescription());
        $stmt->bindParam(":price", $product->getPrice());
        $stmt->bindParam(":image", $product->getImage());
        $stmt->bindParam(":quantityInStock", $product->getQuantityInStock());
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
}