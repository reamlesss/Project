<?php

session_start();

if (!isset($_SESSION['logged'])) {
    $_SESSION['logged'] = 'false';
}

$request = $_SERVER['REQUEST_URI'];

switch ($request){
    case '/':
        if ($_SESSION["logged"] == "true")
        {
            $redirect = '/pages/logout.php';
        }
        else
        {
            $redirect = '/pages/login.php';
        }
        break;
    case '/home':
        if ($_SESSION["logged"] == "true")
        {
            $redirect = '/pages/logout.php';
        }
        else
        {
            $redirect = '/pages/login.php';
        }
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
        if (!isset($_SESSION["data"]))
        {
            $redirect = '/pages/datamanipulation/listdata.php';
        }
        else
        {
            $redirect = '/pages/search.php';
        }
        break;
    default:
        require __DIR__ . '/pages/errors/404.php';
        exit();
}

$_SESSION['site'] = $redirect;

require_once __DIR__ . '/pages/cores/header.php';
require_once __DIR__ . $redirect;
require_once __DIR__ . '/pages/cores/footer.php';

?>
