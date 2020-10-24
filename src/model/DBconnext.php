<?php

namespace File\model;

class DBconnext
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=productManager';
        $this->username = 'root';
        $this->password = 'Quang@123';
    }

    public function connect()
    {
        try {
            return new \PDO($this->dsn, $this->username, $this->password);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}