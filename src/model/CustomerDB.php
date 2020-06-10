<?php


namespace File\model;


class CustomerDB
{
    protected $database;

    public function __construct()
    {
        $db = new DBconnext();
        $this->database = $db->connect();

    }
    public function view(){
        $sql = "SELECT * FROM customers ";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }
}