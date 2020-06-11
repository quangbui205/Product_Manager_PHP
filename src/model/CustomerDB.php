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

    public function view()
    {
        $sql = "SELECT * FROM customers ";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }
    public function delete($code)
    {
        $sql = "DELETE FROM customers WHERE id = :code";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $code);
        $stmt->execute();
    }
}