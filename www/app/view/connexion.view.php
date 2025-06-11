  <main>
      <div class="background-decor">
          <img src="../../public/images/disque.png" class="disque">
          <img src="../../public/images/platine.png" class="platine">
      </div>

      <div class="login-box">
          <img src="../../public/images/logo-symphony.png" alt="Symphony" class="logo-box">
          <form action="?route=connexion" method="POST">
              <label>Adresse mail</label>
              <input type="email" name="email" required>

              <label>Mot de passe</label>
              <input type="password" name="password" required>

              <button type="submit">Se connecter</button>
          </form>
          <div class="links">
              <a href="#">Mot de passe oublié ?</a>
              <a href="?route=inscription">S’inscrire ?</a>
          </div>
      </div>
      <iframe id="music_fond" style="border-radius:12px" src="https://open.spotify.com/embed/track/62KZRwymXq9Rgm8Cm5UCfx?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
  </main>