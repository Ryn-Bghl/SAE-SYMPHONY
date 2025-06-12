<main>
    <div>
        <figure id="vinyle"> <img src="../../public/images/vinyle.png" alt="Vinyle qui tourne" class="animation"> </figure>
        <div class="carousel">
            <div class="slides">
                <div class="bieres_slide active">
                    <a href="?route=produit&genre=<?php echo strtolower($biere[0]["genre"]); ?>">
                        <figure class="biere">
                            <img class="mockup" src="../../public/images/biere/<?php echo strtolower($biere[0]["genre"]); ?>.png" alt="Bière dissonance">
                        </figure>
                    </a>
                    <a href="?route=produit&genre=<?php echo strtolower($biere[0]["genre"]); ?>" class="description">
                        <h1 class="nom_biere" id="jazz"><?php echo $biere[0]["nom"]; ?></h1>
                        <p><?php echo $data["biere_desc"][0]["description"]; ?></p>
                    </a>
                </div>
                <div class="bieres_slide">
                    <a href="?route=produit&genre=<?php echo strtolower($biere[1]["genre"]); ?>">
                        <figure class="biere">
                            <img class="mockup" src="../../public/images/biere/<?php echo strtolower($biere[1]["genre"]); ?>.png" alt="Bière <?php echo $biere[1]["nom"]; ?>">
                        </figure>
                    </a>
                    <a href="?route=produit&genre=<?php echo strtolower($biere[1]["genre"]); ?>" class="description">
                        <h1 class="nom_biere" id="<?php echo strtolower($biere[1]["genre"]); ?>" ;><?php echo $biere[1]["nom"]; ?></h1>
                        <p><?php echo $biere[1]["description"]; ?></p>
                    </a>
                </div>
                <div class="bieres_slide">
                    <a href="?route=produit&genre=<?php echo strtolower($biere[2]["genre"]); ?>">
                        <figure class="biere">
                            <img class="mockup" src="../../public/images/biere/<?php echo strtolower($biere[2]["genre"]); ?>.png" alt="Bière <?php echo $biere[2]["nom"]; ?>">
                        </figure>
                    </a>
                    <a href="?route=produit&genre=<?php echo strtolower($biere[2]["genre"]); ?>" class="description">
                        <h1 class="nom_biere" id="<?php echo strtolower($biere[2]["genre"]); ?>"><?php echo $biere[2]["nom"]; ?></h1>
                        <p><?php echo $biere[2]["description"]; ?></p>
                    </a>
                </div>
                <div class="bieres_slide">
                    <a href="?route=produit&genre=<?php echo strtolower($biere[3]["genre"]); ?>">
                        <figure class="biere">
                            <img class="mockup" src="../../public/images/biere/<?php echo strtolower($biere[3]["genre"]); ?>.png" alt="Bière <?php echo $biere[3]["nom"]; ?>">
                        </figure>
                    </a>
                    <a href="?route=produit&genre=<?php echo strtolower($biere[3]["genre"]); ?>" class="description">
                        <h1 class="nom_biere" id="<?php echo strtolower($biere[3]["genre"]); ?>"><?php echo $biere[3]["nom"]; ?></h1>
                        <p><?php echo $biere[3]["description"]; ?></p>

                    </a>
                </div>
                <div class="bieres_slide">
                    <a href="?route=produit&genre=<?php echo strtolower($biere[4]["genre"]); ?>">
                        <figure class="biere">
                            <img class="mockup" src="../../public/images/biere/<?php echo strtolower($biere[4]["genre"]); ?>.png" alt="Bière <?php echo $biere[4]["nom"]; ?>">
                        </figure>
                    </a>
                    <a href="?route=produit&genre=<?php echo strtolower($biere[4]["genre"]); ?>" class="description">
                        <h1 class="nom_biere" id="<?php echo strtolower($biere[4]["genre"]); ?>"><?php echo $biere[4]["nom"]; ?></h1>
                        <p><?php echo $biere[4]["description"]; ?></p>
                    </a>
                </div>
                <div class="bieres_slide">
                    <a href="?route=produit&genre=<?php echo strtolower($biere[5]["genre"]); ?>">
                        <figure class="biere">
                            <img class="mockup" src="../../public/images/biere/<?php echo strtolower($biere[5]["genre"]); ?>.png" alt="Bière <?php echo $biere[5]["nom"]; ?>">
                        </figure>
                    </a>
                    <a href="?route=produit&genre=<?php echo strtolower($biere[5]["genre"]); ?>" class="description">
                        <h1 class="nom_biere" id="<?php echo strtolower($biere[5]["genre"]); ?>"><?php echo $biere[5]["nom"]; ?></h1>
                        <p><?php echo $biere[5]["description"]; ?></p>
                    </a>
                </div>
                <div class="bieres_slide">
                    <a href="?route=produit&genre=<?php echo strtolower($biere[6]["genre"]); ?>">
                        <figure class="biere">
                            <img class="mockup" src="../../public/images/biere/<?php echo strtolower($biere[6]["genre"]); ?>.png" alt="<?php echo $biere[6]["nom"]; ?>">
                        </figure>
                    </a>
                    <a href="?route=produit&genre=<?php echo strtolower($biere[6]["genre"]); ?>" class="description">
                        <h1 class="nom_biere" id="<?php echo strtolower($biere[6]["genre"]); ?>"><?php echo $biere[6]["nom"]; ?></h1>
                        <p><?php echo $biere[6]["description"]; ?></p>
                    </a>
                </div>
            </div>
            <div class="boutons">
                <button class="precedant"> <img src="../../public/images/fleche.png" alt="Précédent">
                </button>
                <button class="suivant"><img src="../../public/images/fleche.png" alt="Suivant"></button>
            </div>
        </div>
    </div>

    <p id="slogan"> Ressentez la musique, goûtez l'inspiration !</p>

    <h2></h2>
    <hr>

    <div class="video" id="video_promo">
        <iframe width="1120" height="630" src="https://www.youtube.com/embed/IBTesAsUwWg?si=7DEYS7X9CsebWzS6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <hr>

    <div class="video" id="video_backstage">
        <video src=""></video>
    </div>

    <h1 id="festival">FESTIVAL ENZYMES 2025 - NOTRE STAND</h1>

    <div class="evenements">
        <img src="../../public/images/festival_2.jpg" alt="">
        <img src="../../public/images/festival_3.jpg" alt="">
        <img src="../../public/images/festival_4.jpg" alt="">
    </div>
    <iframe id="music_fond" style="border-radius:12px" src="https://open.spotify.com/embed/track/7dzHZQQ69XpP6M3ifGeIJs?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
</main>