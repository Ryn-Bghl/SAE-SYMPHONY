<?php
require_once 'config.php';
require_once 'app/controller/accueil.controller.php';
require_once 'app/model/model.php';

$route = 'home';
if (!empty($_GET['route'])) {
    $route = $_GET['route'];
}
switch ($route) {
    case 'accueil':
        require_once 'app/controller/accueil.controller.php';
        generateAccueilPage();
        break;
    case 'notre-marque':
        require_once 'app/controller/marque.controller.php';
        generateMarquePage();
        break;
    default:
        die();
}
