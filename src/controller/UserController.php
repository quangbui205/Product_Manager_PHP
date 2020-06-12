<?php


namespace File\controller;


use File\model\UserDB;

class UserController
{
    protected $user;
    public function __construct()
    {
        $this->user= new UserDB();
    }
    public function checkUs($user,$password){
        return $this->user->findUser($user,$password);
    }

}