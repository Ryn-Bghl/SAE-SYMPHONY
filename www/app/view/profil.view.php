<main>
    <div class="container">
        <figure><img src="https://api.dicebear.com/9.x/notionists-neutral/svg?seed=<?php echo htmlspecialchars($_SESSION['user']['prenom']); ?>" alt="Photo de profil"></figure>
        <div class="profil-info">
            <p><?php echo htmlspecialchars($_SESSION['user']['prenom']) . ' ' . htmlspecialchars($_SESSION['user']['nom']); ?></p>
            <p><?php echo htmlspecialchars($_SESSION['user']['email']); ?></p>
        </div>
        <div class="profil-actions">
            <a href="?route=profil&action=deconnexion">Déconnexion</a>
        </div>
</main>