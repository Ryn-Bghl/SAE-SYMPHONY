<main>
    <figure id="vinyle"> <img src="../../public/images/vinyle.png" alt="Vinyle qui tourne" class="animation"> </figure>
    <div class="produits" id="dissonance">
        <h1>Dissonance</h1>
        <img class="biere" src="../../public/images/biere/<?php echo strtolower($biere[0]["genre"]); ?>.png" alt="Bière dissonance">
        <p><?php echo $data["biere_desc"][0]["description"]; ?></p>
        <img src="#" alt="">
    </div>

    <p id="slogan"> Ressentez la musique, goûtez l'inspiration !</p>

    <h2></h2>

    <div class="video" id="video_promo">
        <iframe width="1120" height="630" src="https://www.youtube.com/embed/az24lvxuWiE?si=YMwJ1K2KsaY_hJUj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <div class="video" id=video_backstage>
        <video src=""></video>
    </div>

    <div class="evenements">

    </div>

</main>