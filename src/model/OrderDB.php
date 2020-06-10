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
}