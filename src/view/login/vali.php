<?php
use File\controller\UserController;
require_once '../../../vendor/autoload.php';
$userController = New UserController();
$userController->addUser();
