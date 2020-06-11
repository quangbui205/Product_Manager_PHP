<?php

namespace File\model;

use File\model\DBconnext;


class OrderDB
{
    protected $database;

    public function __construct()
    {
        $db = new DBconnext();
        $this->database = $db->connect();

    }

    public function view()
    {
        $sql = "SELECT * FROM orders ";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function creat($order)
    {
        $sql = "INSERT INTO `orders`(`orderNumber`,`orderDate`,`shippedDate`,`requiredDate`,`status`,`comment`,`id`) VALUES (?,?,?,?,?,?,?)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $order->getOrderNumber());
        $stmt->bindParam(2, $order->getOrderDate());
        $stmt->bindParam(3, $order->getShippedDate());
        $stmt->bindParam(4, $order->GetRequiredDate());
        $stmt->bindParam(5, $order->getStatus());
        $stmt->bindParam(6, $order->getComment());
        $stmt->bindParam(7, $order->getId());
        $stmt->execute();
    }
}