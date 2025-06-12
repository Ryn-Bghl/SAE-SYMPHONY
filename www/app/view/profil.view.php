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
        <iframe id="music_fond" style="border-radius:12px" src="https://open.spotify.com/embed/track/7dzHZQQ69XpP6M3ifGeIJs?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
</main>