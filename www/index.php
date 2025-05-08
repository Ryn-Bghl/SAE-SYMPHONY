<?php
require_once 'config.php';
require_once 'app/model/model.php';

$route = 'accueil';
if (!empty($_GET['route'])) {
    $route = $_GET['route'];
}
switch ($route) {
    case 'accueil':
        require_once 'app/controller/accueil.controller.php';
        generateAcceuilPage();
        break;
    case 'boutique':
        require_once 'app/controller/boutique.controller.php';
        generateBoutiquePage();
        break;
    default:
        die();
}
