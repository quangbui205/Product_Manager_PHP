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
    public function delete($id)
    {
        $sql = "DELETE FROM customers WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
}