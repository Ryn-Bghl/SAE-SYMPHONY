<?php

require_once 'app/controller/controller.php';
require_once 'app/model/boutique.model.php';

/**
 * Controller en charge de la génération de la page Boutique
 *
 * @return void
 */
function generateBoutiquePage()
{

    $data = [
        'products' => getAllBeer(),
        'active_route' => 'boutique',
        'css_file' => "../../../public/css/boutique.css",
        'page_title' => "SYMPHONY - Boutique",
        'view' => 'app/view/boutique.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
