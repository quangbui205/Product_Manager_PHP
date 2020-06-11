<?php


namespace File\controller;


use File\model\Order;
use File\model\OrderDB;


class OrderController
{
    protected $order;

    public function __construct()
    {

        $this->order = new OrderDB();
    }

    public function viewOrder()
    {
        $orders = $this->order->view();
        include "src/view/orders/listOrders.php";
    }

    public function addOrder()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include "src/view/orders/addOrder.php";
        } else {
            $orderNumber = $_REQUEST['orderNumber'];
            $orderDate = $_REQUEST['orderDate'];
            $shippedDate = $_REQUEST['shippedDate'];
            $requiredDate = $_REQUEST['requiredDate	'];
            $status = $_REQUEST['status'];
            $comment = $_REQUEST['comment'];
            $id = $_REQUEST['id'];
            $order = new Order($orderNumber, $orderDate, $shippedDate, $requiredDate, $status, $comment,$id);
            $this->order->creat($order);
            header("location:index.php?page=list-orders");
        }
    }

}