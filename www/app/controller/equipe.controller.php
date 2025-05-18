<?php

require_once 'app/controller/controller.php';

/**
 * Controller en charge de la génération de la page Boutique
 *
 * @return void
 */
function generateEquipePage()
{
    $data = [
        'active_route' => 'notre-equipe',
        'css_file' => "../../../public/css/equipe.css",
        'page_title' => "SYMPHONY - Notre equipe",
        'view' => 'app/view/equipe.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
