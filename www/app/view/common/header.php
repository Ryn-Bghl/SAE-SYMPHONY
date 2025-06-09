<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data["page_title"]; ?></title>

    <link rel="stylesheet" href="../../../public/css/header-footer.css">
    <link rel="stylesheet" href="../../../public/css/<?php echo $data["css_file"]; ?>">
    <link rel="shortcut icon" href="../../../public/images/favicon-symphony.png" type="image/x-icon">
    <script src="/public/js/header.js" defer></script>
    <script src="../../../public/js/<?php echo $data["js_file"]; ?>" defer></script>
</head>

<body>
    <header>
        <a href="../../../?route=accueil">
            <figure id="logo-symphony"><img src="../../../public/images/logo-symphony.png" alt="logo de symphony"></figure>
        </a>
        <nav>
            <ul>
                <li><a class="<?php echo isset($data['active_route']) && $data['active_route'] === 'boutique' ? 'focus' : ''; ?>" href="../../../?route=boutique">Boutique</a></li>
                <li><a class="<?php echo isset($data['active_route']) && $data['active_route'] === 'notre-marque' ? 'focus' : ''; ?>" href="../../../?route=notre-marque">Notre marque</a></li>
                <li><a class="<?php echo isset($data['active_route']) && $data['active_route'] === 'notre-equipe' ? 'focus' : ''; ?>" href="../../../?route=notre-equipe">Notre équipe</a></li>
                <li><a class="<?php echo isset($data['active_route']) && $data['active_route'] === 'brassage' ? 'focus' : ''; ?>" href="../../../?route=brassage">Brassage</a></li>
            </ul>
        </nav>
        <ul class="profile-pannier">
            <li>
                <a href="../../../?route=<?php echo isset($_SESSION['user']) ? 'profil' : 'connexion'; ?>">
                    <figure id="profile-icon">
                        <img src="<?php echo isset($_SESSION['user']) ? "https://api.dicebear.com/9.x/notionists-neutral/svg?seed=" . htmlspecialchars($_SESSION['user']['prenom']) : "../../../public/images/profile-icon.png"; ?>" alt="Photo de profil">
                    </figure>
                </a>
            </li>
            <li>
                <a href="../../../?route=pannier">
                    <figure id="pannier-icon"><img src="../../../public/images/pannier-icon.png" alt="icon de pannier"></figure>
                </a>
            </li>
        </ul>
        <button id="burger-menu"><img src="../../../public/images/menu-sandwich.png" alt="menu burger"></button>
        <div class="burger-popup hidden">
            <ul>
                <li><a href="../../../?route=accueil">Accueil</a></li>
                <li><a href="../../../?route=boutique">Boutique</a></li>
                <li><a href="../../../?route=notre-marque">Notre marque</a></li>
                <li><a href="../../../?route=notre-equipe">Notre équipe</a></li>
                <li><a href="../../../?route=brassage">Brassage</a></li>
                <?php if (isset($_SESSION['user'])): ?>
                    <li><a href="../../../?route=profil">Profil</a></li>
                <?php else: ?>
                    <li><a href="../../../?route=connexion">Connexion</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </header>