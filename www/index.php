<?php
require_once 'config.php';
require_once 'app/controller/home.controller.php';
require_once 'app/model/model.php';

$route = 'home';
if (!empty($_GET['route'])) {
    $route = $_GET['route'];
}
switch ($route) {
    case 'home':
        require_once 'app/controller/home.controller.php';
        generateHomePage();
        break;
    case 'boutique':
        require_once 'app/controller/boutique.controller.php';
        generateBoutiquePage();
        break;
    default:
        die();
}
