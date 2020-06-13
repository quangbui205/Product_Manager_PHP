<?php


namespace File\controller;


use File\model\User;
use File\model\UserDB;

class UserController
{
    protected $user;

    public function __construct()
    {
        $this->user = new UserDB();
    }

    public function checkUs($user, $password)
    {
        return $this->user->findUser($user, $password);
    }

    public function addUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['phone'];
            $user = new User($username, $password, $email, $phone);
        }
        $this->user->creatUser($user);
        header("location:login.php");
    }

}