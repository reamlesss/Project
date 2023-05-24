<?php

session_start();

$request = $_SERVER['REQUEST_URI'];

switch ($request){
    case '/':
        $redirect = '/pages/login.php';
        break;
    case '/home':
        $redirect = '/pages/login.php';
        break;
    case '/register':
        $redirect = '/pages/register.php';
        break;
    case '/pages/add':
        $redirect = '/pages/add.php';
        break;
    case '/pages/delete':
        $redirect = '/pages/delete.php';
        break;
    case '/pages/search':
        $redirect = '/pages/search.php';
        break;
    default:
        require __DIR__ . '/pages/errors/404.php';
        exit();
}

$_SESSION['site'] = $redirect;

if (!isset($_SESSION['logged'])) {
    $_SESSION['logged'] = 'false';
}

require_once __DIR__ . '/pages/cores/header.php';
require_once __DIR__ . $redirect;
require_once __DIR__ . '/pages/cores/footer.php';

?>
