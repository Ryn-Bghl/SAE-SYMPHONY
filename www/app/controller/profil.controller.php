<?php

require_once 'app/controller/controller.php';
require_once 'app/model/profil.model.php';

/**
 * Controller en charge de la génération de la page de profil
 * @return void
 */
function generateProfilPage()
{
    $data = [
        'css_file' => '../../../public/css/profil.css',
        'page_title' => "SYMPHONY - Profil",
        'view' => 'app/view/profil.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    if (isset($_GET['action']) && $_GET['action'] == 'deconnexion') {
        // Déconnexion de l'utilisateur
        unset($_SESSION['user']);
        header('Location: index.php?route=connexion');
        exit();
    }

    generatePage($data);
}
