<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page de vérification d'âge
 * @return void
 *
 */
function generateInscriptionPage()
{
    $data = [
        'css_file' => '../../../public/css/inscription.css',
        'page_title' => "SYMPHONY - Inscription",
        'view' => 'app/view/inscription.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
