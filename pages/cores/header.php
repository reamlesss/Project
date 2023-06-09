<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
        <?php
            $site = $_SESSION['site'];
            
            switch ($site) {
                case '/pages/login.php':
                    echo "Orders Management - Login";
                    break;
                case '/pages/logout.php':
                    echo "Orders Management - Logout";
                    break;
                case '/pages/register.php':
                    echo "Orders Management - Register";
                    break;
                case '/pages/add.php':
                    echo "Add Orders";
                    break;
                case '/pages/delete.php':
                    echo "Delete Orders";
                    break;
                case '/pages/search.php':
                    echo "List Orders";
                    break;
                default:
                    echo "Error - Page not found";
                    break;
            }
        ?>
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../css/style.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Ubuntu&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </head>
    <body>
        <header class="head z-2">
            <div class="d-flex bg-dark justify-content-center">
                <a class="d-lg-none d-flex text-decoration-none">
                    <button class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#navbar">
                        <div class="d-flex text-center py-3 px-4 fs-3 text-primary align-items-center">
                            <span class="material-symbols-outlined d-block fs-1 p-1">Menu</span>
                            <span class="px-2 fs-1">Menu</span>
                        </div>
                    </button>
                </a>
            </div>
            <nav class="bg-dark d-lg-flex nav navbar-collapse collapse" id="navbar">
                <div class="d-lg-flex d-block pb-2 container">
                    <hr class="line">
                    <a href="/home" class="d-block text-decoration-none p-lg-0 p-1 hover<?= $_SESSION['site'] === '/pages/login.php' || $_SESSION['site'] === '/pages/logout.php' ? 'active' : '' ?>">
                        <div class="d-flex text-center py-3 px-4 text-<?= $_SESSION['site'] === '/pages/login.php' || $_SESSION['site'] === '/pages/logout.php' ? 'primary' : 'light' ?> justify-content-center align-items-center">
                            <span class="material-symbols-outlined d-block fs-1 p-1">Login</span>
                            <span class="px-2 fs-3">Log in</span>
                        </div>
                        <div class="navdes<?= $_SESSION['site'] === '/pages/login.php' || $_SESSION['site'] === '/pages/logout.php' ? 'active' : '' ?>"></div>
                    </a>
                    <a href="/register" class="d-block text-decoration-none p-lg-0 p-1 hover<?= $_SESSION['site'] === '/pages/register.php' ? 'active' : '' ?>">
                        <div class="d-flex text-center py-3 px-4 text-<?= $_SESSION['site'] === '/pages/register.php' ? 'primary' : 'light' ?> justify-content-center align-items-center">
                            <span class="material-symbols-outlined d-block fs-1 p-1">How_to_reg</span>
                            <span class="px-2 fs-3">Activate</span>
                        </div>
                        <div class="navdes<?= $_SESSION['site'] === '/pages/register.php' ? 'active' : '' ?>"></div>
                    </a>
                    <a href="/pages/add" class="d-<?= $_SESSION['logged'] === 'true' ? 'block' : 'none' ?> text-decoration-none ms-xl-auto p-lg-0 p-1 hover<?= $_SESSION['site'] === '/pages/add.php' ? 'active' : '' ?>">
                        <div class="d-flex text-center py-3 px-4 text-<?= $_SESSION['site'] === '/pages/add.php' ? 'primary' : 'light' ?> justify-content-center align-items-center">
                            <span class="material-symbols-outlined d-block fs-1 p-1">Add</span>
                            <span class="px-2 fs-3">Add</span>
                        </div>
                        <div class="navdes<?= $_SESSION['site'] === '/pages/add.php' ? 'active' : '' ?>"></div>
                    </a>
                    <a href="/pages/delete" class="d-<?= $_SESSION['logged'] === 'true' ? 'block' : 'none' ?> text-decoration-none p-lg-0 p-1 hover<?= $_SESSION['site'] === '/pages/delete.php' ? 'active' : '' ?>">
                        <div class="d-flex text-center py-3 px-4 text-<?= $_SESSION['site'] === '/pages/delete.php' ? 'primary' : 'light' ?> justify-content-center align-items-center">
                            <span class="material-symbols-outlined d-block fs-1 p-1">Delete</span>
                            <span class="px-2 fs-3">Delete</span>
                        </div>
                        <div class="navdes<?= $_SESSION['site'] === '/pages/delete.php' ? 'active' : '' ?>"></div>
                    </a>
                    <a href="/pages/search" class="d-<?= $_SESSION['logged'] === 'true' ? 'block' : 'none' ?> text-decoration-none p-lg-0 p-1 hover<?= $_SESSION['site'] === '/pages/search.php' ? 'active' : '' ?>">
                        <div class="d-flex text-center py-3 px-4 text-<?= $_SESSION['site'] === '/pages/search.php' ? 'primary' : 'light' ?> justify-content-center align-items-center">
                            <span class="material-symbols-outlined d-block fs-1 p-1">Search</span>
                            <span class="px-2 fs-3">List</span>
                        </div>
                        <div class="navdes<?= $_SESSION['site'] === '/pages/search.php' ? 'active' : '' ?>"></div>
                    </a>
                </div>
            </nav>
        </header>
        