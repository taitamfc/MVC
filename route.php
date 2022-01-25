<?php
/*
index.php?controller=user&action=login
index.php?controller=user&action=register

index.php?controller=product&action=list
index.php?controller=product&action=add
index.php?controller=product&action=edit
index.php?controller=product&action=delete

/login
/register


*/
$controller = $_REQUEST['controller'];
$action     = $_REQUEST['action'];

switch ($controller) {
    case 'product':
        include_once 'controllers/productController.php';
        $objController = new productController();
        break;
    case 'user':
        include_once 'controllers/userController.php';
        $objController = new userController();
        break;
    default:
        # code...
        break;
}

switch ($action) {
    case 'list':
        $objController->list();
        break;
    case 'add':
        $objController->add();
        break;
    case 'edit':
        $objController->edit();
        break;
    case 'delete':
        $objController->delete();
        break;
    case 'login':
        $objController->login();
        break;
    case 'register':
        $objController->register();
        break;
    default:
        # code...
        break;
}