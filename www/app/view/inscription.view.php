<main>

    <div class="vinyl"><img src="/public/images/vinyle.png" alt="Image de vinyl"></figure>
    </div>
    <div class="turntable"><img src="/public/images/platine.png" alt="Plaque de Vinyl"></figure>
    </div>
    <div class="form-box">
        <div class="form-logo"><img src="/public/images/logo-symphony.png" alt="logo de symphony"></figure>
        </div>
        <h2>Inscription</h2>
        <form method="POST" action="?route=inscription">
            <label>Adresse mail :</label>
            <input type="email" name="email" required>

            <label>Mot de passe :</label>
            <input type="password" name="mdp" required>

            <label>Mot de passe :</label>
            <input type="password" name="confirm" required>

            <button type="submit">S'inscrire</button>
        </form>
        <a href="/?route=connexion" class="login-link">Se connecter</a>
    </div>
    <iframe id="music_fond" style="border-radius:12px" src="https://open.spotify.com/embed/track/62KZRwymXq9Rgm8Cm5UCfx?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>

</main>