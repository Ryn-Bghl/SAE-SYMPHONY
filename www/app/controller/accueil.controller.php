<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page d'accueil
 * @return void
 *
 */
function generateAcceuilPage()
{
    $data = [
        'css_file' => '../../../public/css/accueil.css',
        'page_title' => "Symphony - Accueil",
        'view' => 'app/view/accueil.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
