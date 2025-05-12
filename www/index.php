<?php
session_start();
require_once 'config.php';
require_once 'app/model/model.php';

session_start();
if (!isset($_SESSION['age_verified'])) {
    header('Location: age-gate.php');
    exit();
}
$route = '';
if (!empty($_GET['route'])) {
    $route = $_GET['route'];
}
switch ($route) {
    case 'ageVerification':
        require_once 'app/controller/ageVerification.controller.php';
        generateAgeVerificationPage();
        break;
    case 'accueil':
        require_once 'app/controller/accueil.controller.php';
        generateAccueilPage();
        break;
    case 'boutique':
        require_once 'app/controller/boutique.controller.php';
        generateBoutiquePage();
        break;
    case 'produit':
        require_once 'app/controller/produit.controller.php';
        generateProduitPage();
        break;
    default:
        die();
}
