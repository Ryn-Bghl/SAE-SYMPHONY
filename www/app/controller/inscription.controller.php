<?php

require_once 'app/controller/controller.php';
require_once 'app/model/inscription.model.php';

/**
 * Controller en charge de la génération de la page d'inscription
 * @return void
 */
function generateInscriptionPage()
{


    // Récuperation du nom et prénom de l'utilisateur
    $nom = '';
    $prenom = '';
    if (isset($_POST['email'])) {
        $email_head = explode('@', $_POST['email'])[0];
        $email_head_exploded = explode('.', $email_head);
        if (count($email_head_exploded) > 1) {
            $_POST["prenom"] = $email_head_exploded[0];
            $_POST["nom"] = $email_head_exploded[1];
        }
    }

    if (isset($_POST['email']) && isset($_POST['mdp']) && isset($_POST['confirm'])) {
        // Vérification de la confirmation du mot de passe
        if ($_POST['mdp'] !== $_POST['confirm']) {
            $data = [
                'css_file' => '../../../public/css/inscription.css',
                'page_title' => "SYMPHONY - Inscription",
                'view' => 'app/view/inscription.view.php',
                'layout' => 'app/view/common/layout.php',
            ];
            generatePage($data);
            return;
        }
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $nom = isset($_POST['nom']) ? $_POST['nom'] : 'DefaultNom';
        $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : 'DefaultPrenom';

        // Création de l'utilisateur
        createUser($email, password_hash($mdp, PASSWORD_DEFAULT), $nom, $prenom);
        header('Location: index.php?route=connexion');
    }

    $data = [
        'css_file' => '../../../public/css/inscription.css',
        'page_title' => "SYMPHONY - Inscription",
        'view' => 'app/view/inscription.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
