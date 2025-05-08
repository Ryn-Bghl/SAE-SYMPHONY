<?php

require_once 'app/controller/controller.php';

/**
 * Controller en charge de la génération de la page Boutique
 *
 * @return void
 */
function generateBoutiquePage()
{

    // Simulated database
    $products = [
        [
            'name' => 'Guitar',
            'description' => 'A high-quality acoustic guitar.',
            'price' => 299.99
        ],
        [
            'name' => 'Piano',
            'description' => 'A classic upright piano.',
            'price' => 499.99
        ],
        [
            'name' => 'Drum Set',
            'description' => 'A complete drum set for beginners.',
            'price' => 199.99
        ]
    ];

    $data = [
        'products' => $products,
        'page_title' => "Symphony - Boutique",
        'view' => 'app/view/boutique.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
