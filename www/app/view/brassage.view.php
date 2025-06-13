<?php

// Déclaration d'un tableau associatif nommé $steps
// Chaque élément représente une étape du processus de brassage de la bière
$steps = [

     // Première étape : BRASSAGE
    [
        'title' => 'Le processus de BRASSAGE',
        'description' => 'La préparation des ingrédients, c’est à dire du malt, orges, houblons, l’eau, de la levure et des gousses de vanilles.',
        'image' => '../../public/images/brassage.webp',
        'reverse' => false
    ],

    // Deuxième étape : CONCASSAGE
    [
        'title' => 'CONCASSAGE',
        'description' => 'Broyer les grains de malt pour en briser l’enveloppe sans les réduire en poudre. Cela facilite l’extraction des sucres pendant l’empâtage. Une mouture bien réalisée optimise le rendement de la bière.',
        'image' => '../../public/images/concassage.webp',
        'reverse' => true
    ],

    // Troisième étape : EMPÂTAGE
    [
        'title' => 'EMPATHAGE',
        'description' => 'Mélanger le malt concassé avec de l’eau chaude pour activer les enzymes. Ces enzymes transforment l’amidon des grains en sucres fermentescibles. La température est contrôlée pour influencer le profil de la bière. Cett étape produit le moût sucré nécessair à la fermentation.',
        'image' => '../../public/images/emphatage.webp',
        'reverse' => false
    ],

        // Quatrième étape : RINÇAGE
    [
        'title' => 'RINCAGE',
        'description' => 'Extraire un maximum de sucres restés dans les grains après l’empâtage. On verse de l’eau chaude sur la drêche pour récupérer ces sucres. Cela augmente le rendement sans trop diluer le moût. C’est une étape importante avant la cuisson.',
        'image' => '../../public/images/rincage.webp',
        'reverse' => true
    ]
];
// Fin du bloc PHP

?>

<main>

    <!-- Titre principal de la page -->
    <h1>BRASSAGE DE NOTRE BIÈRE DISSONANCE</h1>

    <!-- Début de la boucle PHP -->
    <?php foreach ($steps as $step): ?>

    <!-- Chaque étape est contenue dans une section.-->
   <!-- 'reverse' vaut true, on ajoute la classe 'reverse' pour modifier l'ordre d'affichage-->
        <section class="step<?php echo $step['reverse'] ? ' reverse' : ''; ?>">

             <!-- Si l'étape est "reversed", on affiche d'abord le texte puis l'image -->
            <?php if ($step['reverse']): ?>

            <!-- Titre de l'étape -->
                <div class="text">

                     <!-- Titre de l'étape -->
                    <h2><?php echo $step['title']; ?></h2>

                     <!-- Description de l'étape -->    
                    <p><?php echo $step['description']; ?></p>
                </div>

             <!-- Image illustrant l'étape -->
                <img src="<?php echo $step['image']; ?>" alt="<?php echo $step['title']; ?>">
            <?php else: ?>

            <!-- Sinon (si reverse == false), on affiche d'abord l'image puis le texte -->
                <img src="<?php echo $step['image']; ?>" alt="<?php echo $step['title']; ?>">
                <div class="text">
                    <h2><?php echo $step['title']; ?></h2>
                    <p><?php echo $step['description']; ?></p>
                </div>
            <?php endif; ?>
        </section>

     <!-- Ligne de séparation entre chaque étape -->
        <hr>

    <!-- fin d’une boucle foreach en PHP -->
    <?php endforeach; ?>

<!-- Intégration d’un lecteur Spotify : musique de fond pendant la navigation -->
    <iframe id="music_fond" style="border-radius:12px" src="https://open.spotify.com/embed/track/7dzHZQQ69XpP6M3ifGeIJs?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
</main>
