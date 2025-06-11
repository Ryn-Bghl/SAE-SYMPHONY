<?php

require_once 'app/controller/controller.php';
require_once 'app/model/produit.model.php';

/**
 * Controller en charge de la génération de la page Boutique
 *
 * @return void
 */
function generateProduitPage()
{

    switch (strtolower($_GET['genre']) ?? 'jazz') {
        case 'rock':
            $spotifyEmbed = "https://open.spotify.com/embed/track/0aMqNFBj9KtPTD3c3tByRT?utm_source=generator&theme=0";
            break;
        case 'pop':
            $spotifyEmbed = "https://open.spotify.com/embed/track/7BRD7x5pt8Lqa1eGYC4dzj?utm_source=generator&theme=0";
            break;
        case 'classique':
            $spotifyEmbed = "https://open.spotify.com/embed/track/6xMpUNOfaSkyywPiFFXZFh?utm_source=generator&theme=0";
            break;
        case 'jazz':
            $spotifyEmbed = "https://open.spotify.com/embed/track/62KZRwymXq9Rgm8Cm5UCfx?utm_source=generator&theme=0";
            break;
        case "rn'b":
            $spotifyEmbed = "https://open.spotify.com/embed/track/7IVukH71OXfAu3KudrrizN?utm_source=generator&theme=0";
            break;
        case 'techno':
            $spotifyEmbed = "https://open.spotify.com/embed/track/5dNQad4xPCXDkuzJEMRy7S?utm_source=generator&theme=0";
            break;
        case 'hiphop':
            $spotifyEmbed = "https://open.spotify.com/embed/track/4LwU4Vp6od3Sb08CsP99GC?utm_source=generator&theme=0";
            break;
        default:
            $spotifyEmbed = "https://open.spotify.com/embed/track/62KZRwymXq9Rgm8Cm5UCfx?utm_source=generator&theme=0";
            break;
    }

    $data = [
        "music_fond" => $spotifyEmbed ?? "https://open.spotify.com/embed/track/62KZRwymXq9Rgm8Cm5UCfx?utm_source=generator&theme=0",
        'product' => getProductByGenre($_GET['genre'] ?? 'jazz'),
        'active_route' => '',
        'css_file' => "../../../public/css/produit.css",
        'page_title' => "SYMPHONY - Produits",
        'view' => 'app/view/produit.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
