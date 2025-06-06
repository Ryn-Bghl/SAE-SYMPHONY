<main>
    <div>
        <figure id="vinyle"> <img src="../../public/images/vinyle.png" alt="Vinyle qui tourne" class="animation"> </figure>
        <div class="carousel">
            <div class="slides">
                <div class="bieres_slide active">
                    <figure class="biere">
                        <img class="mockup" src="../../public/images/biere/<?php echo strtolower($biere[0]["genre"]); ?>.png" alt="Bière dissonance">
                    </figure>
                    <div class="description">
                        <h1 class="nom_biere" id="jazz"><?php echo $biere[0]["nom"]; ?></h1>
                        <p><?php echo $data["biere_desc"][0]["description"]; ?></p>
                    </div>
                </div>
                <div class="bieres_slide">
                    <figure class="biere">
                        <img class="mockup" src="../../public/images/biere/<?php echo strtolower($biere[1]["genre"]); ?>.png" alt="Bière dissonance">
                    </figure>
                    <div class="description">
                        <h1 class="nom_biere" id="<?php echo strtolower($biere[1]["genre"]); ?>" ;><?php echo $biere[1]["nom"]; ?></h1>
                        <p><?php echo $biere[1]["description"]; ?></p>
                    </div>
                </div>
                <div class="bieres_slide">
                    <figure class="biere">
                        <img class="mockup" src="../../public/images/biere/<?php echo strtolower($biere[2]["genre"]); ?>.png" alt="Bière dissonance">
                    </figure>
                    <div class="description">
                        <h1 class="nom_biere" id="<?php echo strtolower($biere[2]["genre"]); ?>"><?php echo $biere[2]["nom"]; ?></h1>
                        <p><?php echo $biere[2]["description"]; ?></p>
                    </div>
                </div>
                <div class="bieres_slide">
                    <figure class="biere">
                        <img class="mockup" src="../../public/images/biere/<?php echo strtolower($biere[3]["genre"]); ?>.png" alt="Bière dissonance">
                    </figure>
                    <div class="description">
                        <h1 class="nom_biere" id="<?php echo strtolower($biere[3]["genre"]); ?>"><?php echo $biere[3]["nom"]; ?></h1>
                        <p><?php echo $biere[3]["description"]; ?></p>
                    </div>
                </div>
                <div class="bieres_slide">
                    <figure class="biere">
                        <img class="mockup" src="../../public/images/biere/<?php echo strtolower($biere[4]["genre"]); ?>.png" alt="Bière dissonance">
                    </figure>
                    <div class="description">
                        <h1 class="nom_biere" id="<?php echo strtolower($biere[4]["genre"]); ?>"><?php echo $biere[4]["nom"]; ?></h1>
                        <p><?php echo $biere[4]["description"]; ?></p>
                    </div>
                </div>
                <div class="bieres_slide">
                    <figure class="biere">
                        <img class="mockup" src="../../public/images/biere/<?php echo strtolower($biere[5]["genre"]); ?>.png" alt="Bière dissonance">
                    </figure>
                    <div class="description">
                        <h1 class="nom_biere" id="<?php echo strtolower($biere[5]["genre"]); ?>"><?php echo $biere[5]["nom"]; ?></h1>
                        <p><?php echo $biere[5]["description"]; ?></p>
                    </div>
                </div>
                <div class="bieres_slide">
                    <figure class="biere">
                        <img class="mockup" src="../../public/images/biere/<?php echo strtolower($biere[6]["genre"]); ?>.png" alt="Bière dissonance">
                    </figure>
                    <div class="description">
                        <h1 class="nom_biere" id="<?php echo strtolower($biere[6]["genre"]); ?>"><?php echo $biere[6]["nom"]; ?></h1>
                        <p><?php echo $biere[6]["description"]; ?></p>
                    </div>
                </div>
            </div>
            <div class="boutons">
                <button class="precedant" aria-label="Diapositive précédente"> <img src="../../public/images/fleche.png" alt="">
                </button>
                <button class="suivant" aria-label="Diapositive suivante"><img src="../../public/images/fleche.png" alt=""></button>
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

    <div class="video" id=video_backstage>
        <video src=""></video>
    </div>

    <h1 id="festival">FESTIVAL ENZYMES 2025 - NOTRE STAND</h1>

    <div class="evenements">
        <img src="../../public/images/festival_2.jpg" alt="">
        <img src="../../public/images/festival_3.jpg" alt="">
        <img src="../../public/images/festival_4.jpg" alt="">
    </div>

</main>