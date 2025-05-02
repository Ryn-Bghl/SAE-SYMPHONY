<?php

/**
 * Retourne un objet PDO qui correspond à une connexion à la base de données 
 * dont la configuration est donnée dans le fichier config.php.
 *
 * @return PDO
 */
function getDatabaseConnexion(): PDO
{

    try {

        $dsn = 'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST . ';charset=' . DB_CHARSET;
        $pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // TODO: améliorer la gestion de l'erreur
        echo $e->getMessage();
        exit;
    }
    return $pdo;
}
