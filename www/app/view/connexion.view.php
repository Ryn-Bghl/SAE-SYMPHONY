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
  </main>