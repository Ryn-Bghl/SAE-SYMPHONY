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
</main>
<script defer>
    <?php foreach ($_SESSION as $name => $citation): ?>
        sessionStorage.setItem("<?php echo $name; ?>", "<?php echo $citation; ?>");
    <?php endforeach; ?>
</script>