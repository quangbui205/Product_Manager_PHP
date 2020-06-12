<?php
session_start();
use File\controller\UserController;
require_once '../../../vendor/autoload.php';
$userController = new UserController();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $result = $userController->checkUs($user, $password);
    if ($result) {
        $_SESSION['userLogin'] = $result;
        header('location: ../../../index.php');
    } else {
        $_SESSION['error'] = 'Sai tên đăng nhập hoặc mật khẩu';
        header('location: login.php');
    }
}
?>