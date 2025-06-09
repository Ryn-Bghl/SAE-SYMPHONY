<?php

require_once 'app/controller/controller.php';
require_once 'app/model/connexion.model.php';

/**
 * Controller en charge de la génération de la page de connexion
 * @return void
 *
 */
function generateConnexionPage()
{
    $data = [
        "css_file" => "../../../public/css/connexion.css",
        'page_title' => "SYMPHONY - Connexion",
        'view' => 'app/view/connexion.view.php',
        'layout' => 'app/view/common/layout.php',
        'erreurs' => [],
    ];

    if (isset($_POST['email']) && isset($_POST['password'])) {
        // Verification de l'existence de l'utilisateur
        $user = getUserByEmail($_POST['email']);

        // Vérification du mot de passe
        if (password_verify($_POST['password'], $user['mdp'])) {

            // Authentification réussie, redirection vers la page d'accueil
            $_SESSION['user'] = $user;
            header('Location: index.php?route=accueil');
            exit();
        }
    }
    generatePage($data);
}
