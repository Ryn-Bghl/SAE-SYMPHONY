<?php

require_once 'app/controller/controller.php';
require_once 'app/model/marque.model.php';


function generateMarquePage()
{
    // $genre = $_GET["genre"];

    $data = [
        "css_file" => "../../../public/css/marque.css",
        "active_route" => "notre-marque",
        'page_title' => "SYMPHONY - Notre marque",
        'view' => 'app/view/marque.view.php',
        'layout' => 'app/view/common/layout.php',
        
    ];

    generatePage($data);
}
