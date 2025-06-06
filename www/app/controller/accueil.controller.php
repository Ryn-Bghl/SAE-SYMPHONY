<?php

require_once 'app/controller/controller.php';
require_once 'app/model/accueil.model.php';

/**
 * controller en charge de la génération de la page d'accueil
 * @return void
 *
 */
function generateAccueilPage()
{
    // $genre = $_GET["genre"];
    $genre = "Jazz";

    $data = [
        "biere" => getAllBeer(),
        "biere_desc" => getBiereDesc($genre),
        "js_file" => "../../../public/js/accueil.js",
        "css_file" => "../../../public/css/accueil.css",
        'page_title' => "SYMPHONY - Accueil",
        'view' => 'app/view/accueil.view.php',
        'layout' => 'app/view/common/layout.php',

    ];

    generatePage($data);
}
