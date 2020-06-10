<?php


namespace File\controller;


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

}