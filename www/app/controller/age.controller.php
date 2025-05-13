<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page de vérification d'âge
 * @return void
 *
 */
function generateAgePage()
{
    $data = [
        'css_file' => '../../../public/css/age.css',
        'page_title' => "SYMPHONY - Vérification d'âge",
        'view' => 'app/view/age.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
