<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page d'accueil
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
    ];

    generatePage($data);
}
