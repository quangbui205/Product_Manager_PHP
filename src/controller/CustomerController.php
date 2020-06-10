<?php


namespace File\controller;


use File\model\CustomerDB;

class CustomerController
{
    protected $customer;


    public function __construct()
    {
        $this->customer = new CustomerDB();
    }

    public function showCustomer()
    {
        $customers = $this->customer->view();
        include "src/view/listCustomers.php";
    }

}