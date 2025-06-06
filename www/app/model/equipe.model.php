<?php

require_once 'app/model/model.php';

/**
 * Renvoie les informations de tous les membres de l'équipe
 *
 * @return array
 */
function loadTeamMembersFromDatabase(): array
{
    $db = getDatabaseConnexion();
    $stmt = $db->prepare("SELECT * FROM team");
    $stmt->execute();
    return $stmt->fetchAll();
}
