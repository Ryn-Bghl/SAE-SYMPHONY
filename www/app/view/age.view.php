<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../public/css/age.css">
    <link rel="shortcut icon" href="../../public/images/favicon-symphony.png" type="image/x-icon">

    <title>Vérification d'âge</title>
</head>

<body>
    <main class="container">
        <figure id="brand_logo">
            <img src="../../public/images/logo-symphony.png" alt="Logo de la marque de bière Symphony">
        </figure>
        <section class="form_container">
            <h1>La vente d’alcool est interdite aux mineurs.</h1>
            <h2>Avez-vous plus de 18 ans ?</h2>
            <form action="../../index.php" method="POST">
                <button type="submit" name="age-gate" value="no" aria-label="Non, je n'ai pas plus de 18 ans">Non</button>
                <button type="submit" name="age-gate" value="yes" aria-label="Oui, j'ai plus de 18 ans">Oui</button>
            </form>
        </section>
    </main>
</body>

</html>