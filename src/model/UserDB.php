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
    public function creatUser($user){

        $sql = "INSERT INTO `users`(`username`, `password`, `email`, `phone`) VALUES (?,?,?,?)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $user->getUsername());
        $stmt->bindParam(2, $user->getPassword());
        $stmt->bindParam(3, $user->GetEmail());
        $stmt->bindParam(4, $user->GetPhone());
        $stmt->execute();

    }
}