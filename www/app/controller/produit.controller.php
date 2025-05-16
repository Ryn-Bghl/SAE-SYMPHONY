<?php

require_once 'app/controller/controller.php';

/**
 * Controller en charge de la génération de la page Boutique
 *
 * @return void
 */
function generateProduitPage()
{
    // Simulated database
    $product = [
        'name' => 'Jazz Lager',
        'subtitle' => 'A smooth and mellow lager, perfect for jazz evenings.',
        'description' => 'Jazz Lager is a premium beer crafted for those who appreciate the finer things in life. With its smooth and mellow taste, it is the ideal companion for relaxing jazz evenings or any occasion that calls for a touch of sophistication. Enjoy the perfect balance of flavor and refreshment in every sip.',
        'price' => 2.99,
        'image' => '../../../public/images/mockup/jazz.png',
        'genre' => 'jazz'
    ];

    $data = [
        'product' => $product,
        'active_route' => '',
        'css_file' => "../../../public/css/produit.css",
        'page_title' => "SYMPHONY - Produits",
        'view' => 'app/view/produit.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
