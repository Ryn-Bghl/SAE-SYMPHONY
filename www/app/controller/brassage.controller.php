<?php

require_once 'app/controller/controller.php';

/**
 * controller en charge de la génération de la page d'accueil
 * @return void
 *
 */
function generateBrassagePage()
{
    // $genre = $_GET["genre"];
    $genre = "Jazz";

    $data = [
        'active_route' => 'brassage',
        "css_file" => "../../../public/css/brassage.css",
        'page_title' => "SYMPHONY - Brassage",
        'view' => 'app/view/brassage.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
