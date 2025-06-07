<?php
session_start();
require_once 'config.php';
require_once 'app/model/model.php';

$route = "accueil";

if (isset($_POST["age-gate"]) && $_POST["age-gate"] === "yes") {
    $_SESSION["age_verified"] = true;
}

if (!isset($_SESSION['age_verified'])) {
    header('Location: ./app/view/age.view.php');
    exit();
}

if (!empty($_GET['route'])) {
    $route = $_GET['route'];
}
switch ($route) {
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
    case 'notre-equipe':
        require_once 'app/controller/equipe.controller.php';
        generateEquipePage();
        break;
    case 'brassage':
        require_once 'app/controller/brassage.controller.php';
        generateBrassagePage();
        break;
    case 'connexion':
        require_once 'app/controller/connexion.controller.php';
        generateConnexionPage();
        break;
    case 'notre-marque':
        require_once 'app/controller/marque.controller.php';
        generateMarquePage();
        break;
    case 'inscription':
        require_once 'app/controller/inscription.controller.php';
        generateInscriptionPage();
        break;
    case 'error':
        require_once 'app/controller/404.controller.php';
        generate404Page();
        break;
    default:
        header('Location: ?route=error');
        exit();
}
