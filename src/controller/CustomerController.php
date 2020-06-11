<?php


namespace File\controller;


use File\model\CustomerDB;
use File\model\Customer;

class CustomerController
{
    protected $customer;


    public function __construct()
    {
        $this->customer = new CustomerDB();
    }

    public function addCustomer()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include "src/view/customers/addCustomer.php";
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['phone'];
            $address = $_REQUEST['address'];
            $customer = new Customer($id, $name, $email, $phone, $address);
            $this->customer->creat($customer);
            header("location:index.php?page=list-customers");
        }
    }

    public function viewCustomer()
    {
        $customers = $this->customer->view();
        include "src/view/customers/listCustomers.php";
    }

    public function updateCustomer()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET['id'];
            $customer = $this->customer->get($id);
            include "src/view/products/updateCustomer.php";
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['phone'];
            $address = $_REQUEST['address'];
            $customer = new Customer($id, $name, $email, $phone, $address);
            $this->customer->update($customer);
            header("location:index.php?page=list-products");
        }
    }

    public function deteleCus($id)
    {
        $this->customer->delete($id);
        header("location:index.php?page=list-customers");
    }

}