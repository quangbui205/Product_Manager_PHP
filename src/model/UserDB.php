<?php


namespace File\model;


class UserDB
{
    protected $database;

    public function __construct()
    {
        $db = new DBconnext();
        $this->database = $db->connect();
    }

    public function findUser($user, $password)
    {
        $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam('username', $user);
        $stmt->bindParam('password', $password);
        $stmt->execute();
        return ($stmt->fetchAll());
    }
}