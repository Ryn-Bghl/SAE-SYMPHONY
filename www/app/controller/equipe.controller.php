<?php
require_once 'app/controller/controller.php';
require_once 'app/model/equipe.model.php';

$teamMembers = loadTeamMembersFromDatabase();
//Appelle une fonction qui récupère les membres de l'équipe depuis la base de données
foreach ($teamMembers as $teamMember) {
    $_SESSION[$teamMember['name']] = $teamMember['citation'];
}
// Pour chaque membre de l'équipe, on stocke sa citation dans la session
// La clé de session est le nom du membre, et la valeur est sa citation


function generateEquipePage()
// Déclaration d'une fonction nommée generateEquipePage()
// Elle est responsable de configurer et lancer le rendu de la page "Notre équipe"
{
    $data = [
        'active_route' => 'notre-equipe',
         // Indique quelle route est active (utile pour les menus/navigation actifs)
        "js_file" => "../../../public/js/equipe.js",
         // Spécifie le chemin vers le fichier JavaScript spécifique à cette page
        'css_file' => "../../../public/css/equipe.css",
        // Spécifie le chemin vers la feuille de style CSS pour cette page
        'page_title' => "SYMPHONY - Notre equipe",
        // Titre de la page affiché dans l'onglet du navigateur
        'view' => 'app/view/equipe.view.php',
        // Spécifie quel fichier HTML/PHP représente le contenu principal de la page
        'layout' => 'app/view/common/layout.php',
         // Définit le layout général utilisé (header, footer, etc.)
    ];

    generatePage($data);
    // Appelle une fonction (probablement définie dans controller.php) qui génère la page
    // en injectant les données configurées dans $data
}
