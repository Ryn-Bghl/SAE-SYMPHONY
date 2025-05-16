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
            'name' => 'Jazz Lager',
            'description' => 'A smooth and mellow lager, perfect for jazz evenings.',
            'price' => 2.99,
            'image' => '../../../public/images/mockup/jazz.png',
            'genre' => 'jazz'
        ],
        [
            'name' => 'Pop Ale',
            'description' => 'A refreshing ale that pairs well with pop music.',
            'price' => 2.99,
            'image' => '../../../public/images/mockup/pop.png',
            'genre' => 'pop'
        ],
        [
            'name' => 'R&B Stout',
            'description' => 'A rich and creamy stout, ideal for R&B vibes.',
            'price' => 2.99,
            'image' => '../../../public/images/mockup/rnb.png',
            'genre' => 'r&b'
        ],
        [
            'name' => 'Classical Pilsner',
            'description' => 'A crisp and elegant pilsner, suited for classical music.',
            'price' => 2.99,
            'image' => '../../../public/images/mockup/classique.png',
            'genre' => 'classical'
        ],
        [
            'name' => 'Hip-Hop IPA',
            'description' => 'A bold and hoppy IPA, great for hip-hop beats.',
            'price' => 2.99,
            'image' => '../../../public/images/mockup/hip-hop.png',
            'genre' => 'hip-hop'
        ],
        [
            'name' => 'Techno Lager',
            'description' => 'A vibrant and energetic lager, crafted for techno tracks.',
            'price' => 2.99,
            'image' => '../../../public/images/mockup/techno.png',
            'genre' => 'techno'
        ],
        [
            'name' => 'Rock Porter',
            'description' => 'A robust and dark porter, perfect for rock anthems.',
            'price' => 2.99,
            'image' => '../../../public/images/mockup/rock.png',
            'genre' => 'rock'
        ],
    ];

    $data = [
        'products' => $products,
        'active_route' => 'boutique',
        'css_file' => "../../../public/css/boutique.css",
        'page_title' => "SYMPHONY - Boutique",
        'view' => 'app/view/boutique.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
