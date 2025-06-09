<?php

require_once 'app/model/model.php';
require_once 'app/model/connexion.model.php';
/**
 * Récupère un utilisateur par son adresse e-mail
 *
 * @param string $email L'adresse e-mail de l'utilisateur
 * @return array|null Les informations de l'utilisateur ou null si non trouvé
 */

function getUserByEmail(string $email): ?array
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT * From utilisateur where email=:email");
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch();
    return $user;
}
