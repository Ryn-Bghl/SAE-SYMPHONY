<?php

$steps = [
    [
        'title' => 'Le processus de BRASSAGE',
        'description' => 'La préparation des ingrédients, c’est à dire du malt, orges, houblons, l’eau, de la levure et des gousses de vanilles.',
        'image' => '../../public/images/brassage.webp',
        'reverse' => false
    ],
    [
        'title' => 'CONCASSAGE',
        'description' => 'Broyer les grains de malt pour en briser l’enveloppe sans les réduire en poudre. Cela facilite l’extraction des sucres pendant l’empâtage. Une mouture bien réalisée optimise le rendement de la bière.',
        'image' => '../../public/images/concassage.webp',
        'reverse' => true
    ],
    [
        'title' => 'EMPATHAGE',
        'description' => 'Mélanger le malt concassé avec de l’eau chaude pour activer les enzymes. Ces enzymes transforment l’amidon des grains en sucres fermentescibles. La température est contrôlée pour influencer le profil de la bière. Cett étape produit le moût sucré nécessair à la fermentation.',
        'image' => '../../public/images/emphatage.webp',
        'reverse' => false
    ],
    [
        'title' => 'RINCAGE',
        'description' => 'Extraire un maximum de sucres restés dans les grains après l’empâtage. On verse de l’eau chaude sur la drêche pour récupérer ces sucres. Cela augmente le rendement sans trop diluer le moût. C’est une étape importante avant la cuisson.',
        'image' => '../../public/images/rincage.webp',
        'reverse' => true
    ]
];

?>

<main>
    <h1>BRASSAGE DE NOTRE BIÈRE DISSONANCE</h1>

    <?php foreach ($steps as $step): ?>
        <section class="step<?php echo $step['reverse'] ? ' reverse' : ''; ?>">
            <?php if ($step['reverse']): ?>
                <div class="text">
                    <h2><?php echo $step['title']; ?></h2>
                    <p><?php echo $step['description']; ?></p>
                </div>
                <img src="<?php echo $step['image']; ?>" alt="<?php echo $step['title']; ?>">
            <?php else: ?>
                <img src="<?php echo $step['image']; ?>" alt="<?php echo $step['title']; ?>">
                <div class="text">
                    <h2><?php echo $step['title']; ?></h2>
                    <p><?php echo $step['description']; ?></p>
                </div>
            <?php endif; ?>
        </section>
        <hr>
    <?php endforeach; ?>

    <iframe id="music_fond" style="border-radius:12px" src="https://open.spotify.com/embed/track/7dzHZQQ69XpP6M3ifGeIJs?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
</main>
