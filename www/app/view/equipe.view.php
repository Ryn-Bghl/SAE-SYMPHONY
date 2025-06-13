<main>
    <h1> Symphony</h1>
    <ul class="symphony">
        <li>
            <h2>Maïssa</h2>
            <img src="../../public/images/equipe/mmi-maissa.png" alt="">
        </li>
        <li>
            <h2>Candice</h2>
            <img src="../../public/images/equipe/mmi-candice.png" alt="">
        </li>
        <li>
            <h2>Clémence</h2>
            <img src="../../public/images/equipe/mmi-clemence.png" alt="">
        </li>
        <li>
            <h2>Erwann</h2>
            <img src="../../public/images/equipe/mmi-erwann.png" alt="">
        </li>
        <li>
            <h2>Rayan</h2>
            <img src="../../public/images/equipe/mmi-rayan.png" alt="">
        </li>
        <li>
            <h2>Killian</h2>
            <img src="../../public/images/equipe/mmi-killian.jpg" alt="">
        </li>
    </ul>
    <h1>Les Brasseurs</h1>
    <ul class="brasseurs">
        <li>
            <h2>Mathilde</h2>
            <img src="../../public/images/equipe/gb-mathilde.jpg" alt="">
        </li>
        <li>
            <h2>Tom</h2>
            <img src="../../public/images/equipe/gb-tom.jpg" alt="">
        </li>
        <li>
            <h2>Matteo</h2>
            <img src="../../public/images/equipe/gb-matteo.jpg" alt="">
        </li>
        <li>
            <h2>Mabel</h2>
            <img src="../../public/images/equipe/gb-mabel.png" alt="">
        </li>
    </ul>
    <iframe id="music_fond" style="border-radius:12px" src="https://open.spotify.com/embed/track/7dzHZQQ69XpP6M3ifGeIJs?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
</main>
<script defer>
    <?php foreach ($_SESSION as $name => $citation): ?> 
    //creation fonction qui va chercher tous les membres de l'equipe depuis la base de données
    // chq membres possédent nom et citations
    //données stockées dans la superglobale $_SESSION ( stocker données entre plusieurs pages
    // grace a ce petit script php intégré dans le html on parcourt la session pour envoyer automatiquement les citations vers le navigateur
        sessionStorage.setItem("<?php echo $name; ?>", "<?php echo $citation; ?>");
     // chaqueligne genere une commande javascript qui stocke la citation dans le session storage= memoire temporaire du nav, qui garde
     //les données pendant page ouverte
    //  permet de lier données recup en php avec les interactions javascript
    <?php endforeach; ?>
</script>
