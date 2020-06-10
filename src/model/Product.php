<?php

namespace File\model;

use File\model\DBconnext;

class Product
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
}