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
            'price' => 2.99,
            'image' => '../../../public/images/jazz.png'
        ],
        [
            'name' => 'Drum Set',
            'description' => 'A complete drum set for beginners.',
            'price' => 2.99,
            'image' => '../../../public/images/pop.png'
        ],
        [
            'name' => 'Drum Set',
            'description' => 'A complete drum set for beginners.',
            'price' => 2.99,
            'image' => '../../../public/images/rnb.png'
        ],
        [
            'name' => 'Drum Set',
            'description' => 'A complete drum set for beginners.',
            'price' => 2.99,
            'image' => '../../../public/images/classique.png'
        ],
        [
            'name' => 'Piano',
            'description' => 'A classic upright piano.',
            'price' => 2.99,
            'image' => '../../../public/images/hip-hop.png'
        ],
        [
            'name' => 'Drum Set',
            'description' => 'A complete drum set for beginners.',
            'price' => 2.99,
            'image' => '../../../public/images/techno.png'
        ],
        [
            'name' => 'Drum Set',
            'description' => 'A complete drum set for beginners.',
            'price' => 2.99,
            'image' => '../../../public/images/rock.png'
        ],
    ];

    $data = [
        'products' => $products,
        'active_route' => 'boutique',
        'css_file' => "../../../public/css/boutique.css",
        'page_title' => "Symphony - Boutique",
        'view' => 'app/view/boutique.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
