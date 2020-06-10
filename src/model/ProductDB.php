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

    public function view()
    {
        $sql = "SELECT * FROM products ";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function creat($product)
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

    public function delete($code)
    {
        $sql = "DELETE FROM products WHERE productCode= :code";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":code", $code);
        $stmt->execute();
    }

    public function get($id)
    {
        $sql = "SELECT * FROM products WHERE productCode= :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch();

    }

    public function update($product)
    {
        $sql = "UPDATE `products` SET productName= ?,producer= ?,description= ?,price= ?,image= ?,quantityInStock= ? WHERE productCode = ?";
        $stmt = $this->database->prepare($sql);

        $stmt->bindParam(1, $product->getProductName());
        $stmt->bindParam(2, $product->getProducer());
        $stmt->bindParam(3, $product->getDescription());
        $stmt->bindParam(4, $product->getPrice());
        $stmt->bindParam(5, $product->getImage());
        $stmt->bindParam(6, $product->getQuantityInStock());
        $stmt->bindParam(7,$product->getProductCode());
        $stmt->execute();
    }
    public function search($key){
            $sql = "SELECT * FROM products WHERE productName LIKE :keyword";
            $stmt = $this->database->prepare($sql);
            $stmt->bindValue(":keyword", '%' . $key . '%');
            $stmt->execute();
            return ($stmt->fetchAll());
        }

    }